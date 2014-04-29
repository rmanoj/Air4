<?php
    require_once 'libs/DBConnection.php';
	require_once 'libs/DataCenter.php';
	$customerManagement = true;
	$TITLE = "Customer Management";

$cutomerEngine = new DataCenter(new DBConnection);
$getAllPlans  = array('conditions'=>'all');
$allPlans = $cutomerEngine->searchPlan($getAllPlans);

if(isset($_POST['addNewCustomer'])){

$date = date('Y-m-d',strtotime($_POST['connection_date']));

		//Table   'column_name' => 'value' 
$customer =  array('name' => $_POST['customerName'],
				   'address' => $_POST['customerAddress'],
				   'phone' => $_POST['customerPhone'],
				   'proof_verification' => ($_POST['customerProof']==="no")?false:true,
				   'plan_id' => $_POST['customerPlan'],
				   'connection_date' => $date
				 ); 
 
$cutomerEngine->addNewCustomer($customer);

}

require_once 'libs/Config.php'; 
require_once 'view/customerManagement.php' ;
?>