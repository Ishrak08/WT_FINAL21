<?php include 'main_header.php';
	include 'controllers/department_controller.php';
?>
<h5>
	<?php echo $db_err; ?>
</h5>
<form>
	Std name
	<input type = "text" name ="sname">
	<input type = "submit" name ="add_dept" value= "Add Dept">
	
</form>
<?php include 'main_footer.php';

?>