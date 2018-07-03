<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    
    class db {
    protected $con;    
        
        public function __construct() {
            try {
                $this->con = new PDO($this->servername, $this->database, $this->username, $this->password);
            } catch(Exception $e){
			    echo "DataBase Connection Problem: ". $e->getMessage();
		    }
        }
    }
?>