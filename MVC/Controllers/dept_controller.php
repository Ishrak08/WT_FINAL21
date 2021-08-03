<?php
	include 'models/db_config.php';
	$db_err="";
	if(isset ($_POST["add_dept"])){
		//val
		$rs= insertDept($_POST ["stdname"]);
		if($rs===true)
		{
			header ("Location : dept.php");
		}
		$db_err=$rs;
		
	}
	function insertDept($stdname)
	{
		$query= "insert into dept values (NULL,'$stdname')";
		return execute($query);
	}
	
	function getAllDept(){
		$query="select * from deptt";
		$rs= get($query);
		return $rs;
	
	
	}
	
 ?>
