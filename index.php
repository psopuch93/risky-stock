<?php
	session_start();
	if((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
	{
		header('Location: main.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Risky Stock</title>
		<meta name="description" content="">
		<meta name="author" content="Ja">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
	
	<nav id="navbar">
		<div id="logo">
			
		</div>
		
		<ul>
			<li class="item">Home</li>
		</ul>	
	</nav>
	<div id="form_container">
		<div id="login_form">
			<form action="login.php" method="post">
				Login:<br />
				<input type="text" name="login" />
					<br/><br/>
				Password:<br />
				<input type="password" name="password" />
					<br/><br/>
				<input type="submit" value="Login"/>
			</form>
		</div>
	</div>
	<div id="source_info_container">
		<div class="inner_info_container"><p>Bitcoin</p></div>
		<div class="inner_info_container"><p>Gold</p></div>
		<div class="inner_info_container"><p>Silver</p></div>
		
		
	</div>
<?php
	if(isset($_SESSION['error_login']))
	echo $_SESSION['error_login']; 
?>
</body>
</html>
