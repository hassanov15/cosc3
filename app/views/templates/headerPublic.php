<?php
require_once('../app/core/utils.php');
 session_start();

if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
if(isset($_POST['attempts'])){
	
		$_SESSION['attempts'] = $_SESSION['attempts'];
		echo "attempts". $_SESSION['attempts'];
	}

	 
	if (isset($_SESSION['loginCount']))
	{
	   $_SESSION['loginCount']++;
	   if ($_SESSION['loginCount'] == 100)
	   {
		if($_SESSION['loggedIn']== false){
		echo 'too many attempts!'.$_SESSION['loginCount'];
	       exit;
		}
	   }
	} else {
	   			$_SESSION['loginCount'] = 0 ;
		
	}

?>

<!DOCTYPE html>
<html lang="en">
    <link href= "/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>COSC 4806</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>