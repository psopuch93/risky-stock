<?php
	session_start();
	
	if(!isset($_SESSION['logged']))
	{
		header('Location: index.php');
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

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

<body>
	
<?php
	echo "<p> Witaj ".$_SESSION['user'].'! [<a href = logout.php>Log out</a>]</p>';
	echo "<p> <b> Bitcoins</b>: ".$_SESSION['bitcoin'];
	echo "| <b> Złoto</b>: ".$_SESSION['zloto'];
	echo "| <b> Srebro</b>: ".$_SESSION['srebro']."</p>";
	echo "<p><b>Email: </b>".$_SESSION['email'];
	echo "| <b> Dni premium: </b>: ".$_SESSION['dnipremium']."</p>";
	
?>

<div class="Welcome">
<?php
	$date = date('H:i:s');
	echo "<br>" . $date;
	echo "<br>" ;
	
	function newValues(){
		global $bitcoin_value, $zloto_value, $srebro_value;
		$bitcoin_value = rand(1, 100);
		$zloto_value = rand(1, 100);
		$srebro_value = rand(1,100);
	}
	
	$bitcoin_value = 0; echo "<br>";
	$zloto_value = 0; echo "<br>";
	$srebro_value = 0; echo "<br>";
	if ($date =='20:02:15') {
		newValues();
		
	}
	
	echo "Dziesiejsze ceny: " ."<br><br>"
	."Bitcoin: "  .$bitcoin_value ."<br>"
	."Złoto: " .$zloto_value ."<br>" ."Srebro: " .$srebro_value;
	
	
	
?> 
</div>
</body>
</html>
