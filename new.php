<?php	 
	include("includes/header.php");
?>

<script type="text/javascript">
	function dp(){
		Materialize.toast('Added Successfully!', 3000);
	}
</script>

<?php
	if(isset($_POST['add']))
	{
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'a';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{
		  die('Could not connect: ' . mysql_error());
		}

		if(! get_magic_quotes_gpc() )
		{
		   $title = addslashes ($_POST['title']);
		   $link = addslashes ($_POST['link']);
		}
		else
		{
		   $title = $_POST['title'];
		   $link = $_POST['link'];
		}
		$Category = $_POST['Category'];

		$sql = "INSERT INTO tutorials_tbl ".
		       "(title, link, Category) ".
		       "VALUES ".
		       "('$title','$link','$Category')";
		mysql_select_db('TUTORIALS');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not enter data: ' . mysql_error());
		}
		echo "<script> dp(); </script>";
		mysql_close($conn);
	}
?>

	
	<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="600" border="0" cellspacing="1" cellpadding="2">
	<tr>
	<td width="250">Title</td>
	<td>
		<input name="title" type="text" id="title">
	</td>
	</tr>
	<tr>
	<td width="250">Link</td>
	<td>
		<input name="link" type="text" id="link">
	</td>
	</tr>
	<tr>
	<td width="250">Category</td>
	<td>
		<input name="Category" type="text" id="Category">
	</td>
	</tr>
	<tr>
	<td width="250"> </td>
	<td> </td>
	</tr>
	<tr>
	<td width="250"> </td>
	<td>
		<!-- <input name="add" type="submit" id="add" value="Submit"> -->
		<button class="btn waves-effect waves-light" id="add" type="submit" name="add">Submit
	    	<i class="material-icons right">send</i>
	  	</button>
	</td>
	</tr>
	</table>
	</form>


<?php	 
	include("includes/footer.php");
?>