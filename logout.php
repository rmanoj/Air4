<?php

	require_once 'libs/DBConnection.php';
	require_once 'libs/DataCenter.php';
	require_once 'libs/Config.php';
	
	$loggerEngine = new DataCenter(new DBConnection);
	$loggerEngine->logout();


?>