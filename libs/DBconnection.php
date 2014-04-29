<?php
/**
* 
*/

class DBconnection 
{

  private $database_name='air_four';
  private $username = 'root';
  private $password = '';
  public  $getConnection;

	function __construct(){
	            try{
				$this->getConnection = new PDO('mysql:host=localhost;dbname='.$this->database_name,$this->username,$this->password);
				$this->getConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}
				catch(PDOException $e){
				echo $e->getMessage();
		        } 
    

	}

}

?>