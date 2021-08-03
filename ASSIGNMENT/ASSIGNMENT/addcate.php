<?php include 'MainHeader.php';
	include 'controllers/CatCont.php';
?>
<h4>
	<?php echo $db_err; ?>
</h4>
<form>
	name
	<input type = "text" name ="name">
	<input type = "submit" name ="add_cate" value= "Add Cate">
	
</form>
<?php include 'MainFooter.php';

?>