<?php
    
//     $servername = getenv('IP');
    
    class db {
        private $database = "c9";
        private $password = "";
        private $username = 'C9_USER';
        private $dbport = 3306;
        protected $con;
        
        public function __construct() {
            try {
                $this->con = new PDO($this->database, $this->dbport, $this->username, $this->password);
            } catch(Exception $e){
			    echo "DataBase Connection Problem: ". $e->getMessage();
		    }
        }
    }
?>