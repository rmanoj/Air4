<?php
    require_once 'libs/DBConnection.php';
	require_once 'libs/DataCenter.php';
	$planManagement = true;
	$TITLE = "Manage Plans";

$planEngine = new DataCenter(new DBConnection);


if(isset($_POST['addNewPlan'])){

$plan  = array('plan_name' => $_POST['planName'],
			   'speed' => $_POST['planSpeed'] ." ".$_POST['planType'],
			   'price' => $_POST['planPrice'],
			   'download_type' => $_POST['planDownloadType'],
			   'month' => $_POST['planMonthMode']
			   );
$planEngine->addNewPlan($plan);
header("location:planManagement.php");
}


$getAllPlans  = array('conditions'=>'all');
$allPlans = $planEngine->searchPlan($getAllPlans);

require_once 'libs/Config.php'; 
require_once 'view/planManagement.php' ;

?>