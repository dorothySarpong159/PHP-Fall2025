<?php
    class Database{
        private $host = DB_HOST;
        private $db   = DB_NAME;
        private $user = DB_USERNAME;
        private $pass = DB_PASS;

        private $pdo;
    
        public function getConnection(){
        
            if($this->pdo === null){
                try{
                    $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
                    $this->pdo = new PDO($dsn, $this->user,$this->pass);
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
                }catch(PDOException $e){ 
                    die("Sorry, Could not connect to the database: " . $e->getMessage());
                }
            }
            return $this->pdo;
        }
    }

?>
