<?php include 'MainHeader.php';
include 'controllers/UserController.php';
 ?>


<h1>
	login 
</h1>

<form action= "" method= "post">
	<table>
	
		<tr>
			<td>
				Name
			</td>
			
			<td>
				<input type ="text" name = "name" value ="<?php echo $name ?>">
				<span>
					<?php echo $err_name ?>
				</span>
				<span>
					<?php echo $err_db ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Username
			</td>
			
			<td>
				<input type ="text" name = "uname" value ="<?php echo $uname ?>">
				<span>
					<?php echo $err_uname ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Email
			</td>
			
			<td>
				<input type ="text" name = "email">
			</td>
		</tr>
		
		<tr>
			<td>
				Password
			</td>
			
			<td>
				<input type ="password" name = "pass"><br>
				<input type = "submit" value = "login" name= "log_in">
			</td>
		</tr>
	</table>
</form>
<?php include 'MainFooter.php'; ?>