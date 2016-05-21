<?php	 
	include("includes/header.php");
?>

<script type="text/javascript">
	function dp(){
		alert('Deleted Successfully!');
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
		$idd = $_POST['id'];
		$sql = "DELETE FROM tutorials_tbl
		        WHERE id='$idd'";

		mysql_select_db('TUTORIALS');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not delete data: ' . mysql_error());
		}
		echo "<script> dp(); </script>";
		echo "<script>window.location = 'index.php'</script>";
		mysql_close($conn);
	}
	else{
?>

  <form method="post" action="<?php $_PHP_SELF ?>">
  <h3> Remove a task </h3>
<table width="600" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="250">Enter ID</td>
<td>
	<input name="id" type="text" id="id">

	<?php

	?>
</td>
</tr>

<tr>
<td width="250"> </td>
<td> </td>
</tr>
<tr>
<td width="250"> </td>
<td>
		<button class="btn waves-effect waves-light" id="add" type="submit" name="add">Delete
	    	<i class="material-icons right">delete</i>
	  	</button>
</td>
</tr>
</table>
</form>
<?php
}
?>


<?php	 
	include("includes/footer.php");
?>