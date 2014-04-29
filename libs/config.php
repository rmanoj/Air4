<?php
	//Start the session for every page 
	session_start();

	require_once 'DBConnection.php';
	require_once 'DataCenter.php';

	$dataCenter = new DataCenter(new DBConnection);

	if(!$dataCenter->loggedIn() && !$index){
		header('location:index.php?login=iup');
	}else if(isset($index) && $dataCenter->loggedIn()){
		header('location:dashboard.php');
	} 


	
?>