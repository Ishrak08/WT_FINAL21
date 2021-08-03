<?php include 'MainHeader.php'; include 'controllers/UserController.php';
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
				Username
			</td>
			
			<td>
				<input type ="text" name= "uname">
				<span>
					<?php echo $err_uname ?>
				</span>
				
			</td>
		</tr>
		
		<tr>
			<td>
				Password
			</td>
			
			<td>
				<input type ="password" name= "pass">
				<span>
					<?php echo $err_pass ?>
				</span>
				<br>
				<input type = "submit" name ="btn_login" value = "Login">
			</td>
		</tr>
	</table>
</form>
<?php include 'MainFooter.php'; ?>