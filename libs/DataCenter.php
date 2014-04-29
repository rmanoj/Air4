<?php 


class DataCenter
{

// :All the local variables are declared here 

 	 private $localConnection;
 	 private $loginTable = 'employee';
 	 private $customerTable = 'customer';
 	 private $paymentTable = "";
 	 private $planTable = "plan";





// :#############################################


// :Methods section
// :This function is responsible for the connection of datebase with a
// :local variable from master connection

	function __construct(DBConnection $assignConnection ){
	     $this->localConnection  = $assignConnection->getConnection;
	}


// This function is used for permissions
	public function permission(){
		$admin = array();
		$unKnown = array();

	    return false;
	}




// This function checks the session 
	public function loggedIn(){
		if(isset($_SESSION['dataCenterSession'])){
			return true;
		}

		return false;
	}




// This function is used to login user
	public function login($username,$password){

	try {
	 $password = md5($password);
	 
	 $loginQuery = 'SELECT COUNT(*) FROM '.$this->loginTable.' WHERE username=:username  AND password=:password';
   	 
   	 $prepareQuery = $this->localConnection->prepare($loginQuery); 
     
     
     $prepareQuery->execute(array('username'=>$username,
     						      'password'=>$password));

     		$check=$prepareQuery->fetch(PDO::FETCH_NUM);

	     if($check[0] == 1){

	     		$_SESSION['dataCenterSession'] = $username;

				$lastLoginQuery = 
					"SELECT last_login from 
						".$this->loginTable." 
						WHERE username=:username AND password =:password";

				$prepareQuery = $this->localConnection->prepare($lastLoginQuery); 
     
     
     			$prepareQuery->execute(array('username'=>$username,
     						                 'password'=>$password)
     					  			   );
     			
					$last_login=$prepareQuery->fetch();

	     		$_SESSION['lastLogin'] = $last_login['last_login'];
	     			
 				header('location:dashboard.php');

	     }else{
  		    
	     	header('location:index.php?login=iup');
	     }
   
   } catch (PDOException $e) {
   	  echo $e;
   }


	}


// This function is used to logout the logged_in user
	public function logout(){
		session_destroy();
		session_unset();
		// ulos = user logged out successfully
		header('location:index.php?login=ulos');

	}
 
// This function specifies the last login store in the data base



// :This function adds the new customer to the data base 
	public function addNewCustomer($customer = array()){
		$NEW_CUSTOMER = array($this->customerTable => $customer);
		$this->insert($NEW_CUSTOMER);
	}


// :This funcition is used to edit the
	public function editCustomer(){
		
	}


// :This function deletes the user
	public function deleteCustomer(){

	}
		
	

// :The all in one search component is build using this method
	public function searchCustomer(){
		
	}



// :This function is used to add new plans to the data base
	public function addNewPlan($plan){
		$PLANS = array($this->planTable => $plan);
		$this->insert($PLANS);
	}


// :This function is used to edit the exsisting plans
	public function editPlan(){

	}


// :This function is used to delete the exsisting plans having the condition 
// : that the deleting plans are not assigned to any of the users
   	public function deletePlan(){
	
	}

// :This is the general search based on this every conditions are made
	public function searchPlan($planSearch = array()){
		
		$searchQuery = '';
		$PLANS = array($this->planTable => $planSearch);

			foreach ($PLANS as $table_name => $condition_value) {
				$searchQuery .= "SELECT ";

				foreach ($condition_value as $key => $condition) {
				  	if($condition === "all"){
				  		$searchQuery .= "* FROM ".$table_name;
				  	}
			
				}

			}

		 
			$prepareQuery = $this->localConnection->prepare($searchQuery); 
			$prepareQuery->execute();
			$fetchedResult = $prepareQuery->fetchAll();
	  	
 			return $fetchedResult;

	}


// :This is general insert function
	public function insert($tableWithValues = array()){
		if($tableWithValues != null){
		$insertQuery = '';

			foreach ($tableWithValues as $table => $index_key_values) {
				$insertQuery .= "INSERT INTO ".$table." (";

					foreach ($index_key_values as $key => $value) {
							$insertQuery .= $key.",";
					}	

					$insertQuery = rtrim($insertQuery, ",").") VALUES(";

					foreach ($index_key_values as $value) {
							$insertQuery .= "'".$value."',";
					} 
					$insertQuery = rtrim($insertQuery, ",").")";  
			}
 

	  $isInserted = $this->localConnection->exec($insertQuery);
      
	} /*endif*/

} /*function end*/





}


?>