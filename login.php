<?php
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['password'])));

	require_once "connect.php";
	
	$connect = @new mysqli($host,$db_user, $db_password, $db_name);
	
	if($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno."Description: ".$connect->error;
	}
	else 
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM uzytkownicy WHERE binary user='$login' AND binary pass='$password'";
		if($result = @$connect->query($sql))
		{
			$how_many_user = $result->num_rows;
			if($how_many_user > 0)
			{
				$_SESSION['logged'] = true;
				
				$row = $result->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];
				$_SESSION['bitcoin'] = $row['bitcoin'];
				$_SESSION['zloto'] = $row['zloto'];
				$_SESSION['srebro'] = $row['srebro'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['dnipremium'] = $row['dnipremium'];
				
				
				unset($_SESSION['error_login']);
				$result->free_result();
				header('Location: main.php');
				
			}
			else 
			{
				
				$_SESSION['error_login'] = '<span style="color:red">Incorrect login or password!</span>';
				header('Location: index.php');	
			}
		}
		
		$connect->close();
	}
	
	

?>