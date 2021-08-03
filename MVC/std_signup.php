<?php 
	include 'main_header.php';
	include 'controllers/student_controller.php';
?>
<h1>
	Student Sign Up
</h1>

<form action= "" method= "post">
	<table>
	
		<tr>
			<td>
				Std Name
			</td>
			
			<td>
				<input type ="text" name = "sname" value ="<?php echo $sname; ?>">
				<span>
					<?php echo $err_sname; ?>
				</span>
				<span>
					<?php echo $err_db; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				DOB
			</td>
			
			<td>
				<input type ="text" name = "dob" value ="<?php echo $dob; ?>">
				<span>
					<?php echo $err_dob; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Credit
			</td>
			
			<td>
				<input type ="text" name = "credit" value ="<?php echo $credit;?>">
				<span>
					<?php echo $err_credit; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Cgpa
			</td>
			
			<td>
				<input type ="text" name = "cgpa">
				<span>
					<?php echo $err_cgpa ;?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Std Id
			</td>
			
			<td>
				<input type ="text" name = "std_id"><br>
			</td>
		</tr>
		
		<tr>
			<td>
				
			</td>
			
			<td>
				<input type ="submit" value= "Sign Up" name = "Sign_Up"><br>
			</td>
		</tr>
	</table>
</form>
<?php 
	include 'main_footer.php';
?>