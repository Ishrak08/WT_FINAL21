<?php include 'main_header.php'; include 'controllers/student_controller.php';
?>


<h1>
	Login
</h1>

<h3>
	<?php echo $err_db; ?>
</h3>

<form action ="" method = "post">
	<table>
		<tr>
			<td>
				Std Name
			</td>
			
			<td>
				<input type ="text" name= "name">
				<span>
					<?php echo $err_name ?>
				</span>
				
			</td>
		</tr>
		
		<tr>
			<td>
				
			</td>
			
			<td>
				<input type = "submit" name ="btn_login" value = "Login">
			</td>
		</tr>
	</table>
</form>
<?php include 'main_footer.php'; ?>