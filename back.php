<div id="del_form">
	<form method="post" action="del.php">
	<?php
		$options = array("Codeforces", "HackerRank", "Topcoder", "HackerEarth", "SPOJ");
	?>

	  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Select a Task</a>

	  <ul id='dropdown1' class='dropdown-content'>
	  <?php
		  $i = 0;
		  for ( $i = 0 ; $i < 5 ; $i ++ ){
		  	?>
		  	<li> <a href = "#"> <?php echo $options[$i]; ?>
		  	<?php
		  }
	  ?>
	  </ul>
	  <br>
	  <br>

	<button class="btn waves-effect waves-light" id="add" type="submit" name="add">Delete
	   	<i class="material-icons right">delete</i>
	</button>
	</form>
</div>
