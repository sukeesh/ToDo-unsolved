<?php	 
	include("includes/header.php");
?>

<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'a';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ){
	  die('Could not connect: ' . mysql_error());
	}
	echo "</br>";
	$sql = 'SELECT *
	        FROM tutorials_tbl';
	mysql_select_db('TUTORIALS');
	$retval = mysql_query( $sql, $conn );
	if(! $retval ){
	  die('Could not get data: ' . mysql_error());
	}?>

		<table class="highlight">
        	<thead>
	          <tr>
	              <th data-field="id">Id</th>
	              <th data-field="name">Title</th>
	              <th data-field="name">Category</th>
	              <th data-field="name">Added</th>
	          </tr>
        </thead>
        <tbody>
        <?php	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){ ?>	
          <tr>
            <td> <?php echo "{$row['id']}"; ?> </td>
            <td> <a href = "<?php echo "{$row['link']}" ; ?>" > <?php echo "{$row['title']} </br>";?> </a> </td>
            <td> <?php echo "{$row['Category']}"; ?> </td>
          </tr>
         <?php }?>
        </tbody>
      </table>

		 
		<?php
			mysql_close($conn);
		?>            

<?php	 
	include("includes/footer.php");
?>