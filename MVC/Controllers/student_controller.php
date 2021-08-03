
<?php
	include 'models/db_config.php';
	$name="";
	$err_name="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_credit="";
	$cgpa="";
	$err_cgpa="";
	$dept_id="";
	$err_dept_id="";
	$err_db="";
	$hasError=false;
	if(isset ($_POST["log_in"])){
		if(empty ($_POST["name"])){
			$err_name="Name required";
			$hasError=true;
		}
		else{
			$name=$_POST["name"];
		}
		
		if(empty ($_POST["dob"])){
			$err_dob="Date of birth required";
			$hasError=true;
		}
		else{
			$dob=$_POST["dob"];
		}
		
		if(empty ($_POST["credit"])){
			$err_credit="Credit required";
			$hasError=true;
		}
		else{
			$credit=$_POST["credit"];
		}
		
		if(empty ($_POST["cgpa"])){
			$err_cgpa="cgpa required";
			$hasError=true;
		}
		else{
			$cgpa=$_POST["cgpa"];
		}
		if(!$hasError){
			$rs = insertUser($name, $dob, $_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
			if($rs=== true)
			{
				header ("Location: student_login.php");
			}
			$err_db = $rs;
		}
	}
	else if(isset ($_POST ["btn_login"]))
	{
		if(empty ($_POST["uname"])){
			$err_uname="Username required";
			$hasError=true;
		}
		else{
			$uname=$_POST["uname"];
		}
		
		if(empty ($_POST["pass"])){
			$err_pass="Password required";
			$hasError=true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(!hasError)
		{ 
			if(authenticateUser($_POST ["user"],$_POST["pass"])){
				session_start();
				$_SESSION["loggeduser"]=$_POST ["uname"];
				header ("Location : dashboard.php");
			}
			$err_db= "Username Password invalid";
		}
	}
	
	function insertUser($name,$uname, $email, $pass)
	{
		$query = "insert into users values (NULL, '$name','$uname','$email','$pass')";
		return execute($query);
	}
	function authenticateUser($uname,$pass){
		$query="select * from users where username = $uname and password = $pass";
		$rs= get($query);
		if(count ($rs)>0)
		{
			return true;
		}
		return false;
	}
?>
