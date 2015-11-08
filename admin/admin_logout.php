<?php
    session_start();
    unset($_SESSION['admin']);
    header("Location: ./");
    if(!$_SESSION['admin']) die("Access denied!");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<? require_once("../engine/headers.php"); ?>
</head>
<body>

</body>
</html>

