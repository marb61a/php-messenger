<?php
    
//     $servername = getenv('IP');
//     $username = getenv('C9_USER');
//     $dbport = 3306;

//     // Create connection
//     $con = new mysqli($servername, $username, $password, $database, $dbport);
    
    
    class db {
        private $database = "c9";
        private $password = "";
        protected $con;
        
        public function __construct() {
            try {
                $this->con = new PDO($this->database);
            } catch(Exception $e){
			    echo "DataBase Connection Problem: ". $e->getMessage();
		    }
        }
    }
?>