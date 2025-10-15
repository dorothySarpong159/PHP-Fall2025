<?php
define("DB_HOST","172.31.22.43");
define("DB_NAME","Dorothy200624161");
define("DB_USERNAME", "Dorothy200624161");
define("DB_PASS", "0ixjEtPZKD");
  
try{
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASS);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  
    die("Connection failed: " . $e->getMessage());
}
?>



