<?php
    // $servername = getenv('IP');
    // $username = getenv('C9_USER');
    // $password = "";
    // $database = "c9";
    
    // class db {
    // protected $con;    
        
    //     public function __construct() {
    //         try {
    //             $this->con = new PDO($this->servername, $this->database, $this->username, $this->password);
    //         } catch(Exception $e){
			 //   echo "DataBase Connection Problem: ". $e->getMessage();
		  //  }
    //     }
    // }
    
    class db {


	private $host     = "localhost";
	private $dbname   = "messenger";
	private $username = "root";
	private $password = "";
	protected $con;

	public function __construct() {

		try {
			// new PDO("mysql:host=localhost;dbname=messenger","root","");
			$this->con = new PDO("mysql:host=". $this->host. ";dbname=". $this->dbname, $this->username, $this->password);
			
		}
		catch(Exception $e){
			echo "DataBase Connection Problem: ". $e->getMessage();
		}
	}

}
?>