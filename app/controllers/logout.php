<?php

session_destroy();
$_SESSION['loggedIn'] = false;
header("Location: home.php");
header ('location:/');