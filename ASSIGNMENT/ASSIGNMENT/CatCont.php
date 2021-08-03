<?php
	include 'models/db_config.php';
	$db_err="";
	if(isset ($_POST["add_cate"])){
		//val
		$rs= insertCategory($_POST ["name"]);
		if($rs===true)
		{
			header ("Location : allcate.php");
		}
		$db_err=$rs;
		
	}
	function insertCate($name)
	{
		$query= "insert into categories values (NULL,'$name')";
		return execute($query);
	}
 ?>