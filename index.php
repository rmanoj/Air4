<?php 
require_once 'libs/DBConnection.php';
	require_once 'libs/DataCenter.php';
	$index = true;
    require_once 'libs/Config.php';



if(isset($_POST['loginForm'])){
	$admin = new DataCenter(new DBConnection);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$admin->login($username,$password); 
} 


require_once 'view/index.php' ;

?>


 