<?php
	session_start();
	session_destroy();
	header('location: ehc.php')
?>