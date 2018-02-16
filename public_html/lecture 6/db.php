<?php
$dbHostname = 'localhost';
$dbDatabase = 'yamira_quinones';
$dbUsername = 'yamira.quinones';
$dbPassword = '6513';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);


 function getResultFromSQL($sql, $values= []) {
    global $db;
    
    
    $stmt=$db->prepare($sql);
    $stmt->execute($values);
   return $stmt->fetchAll();
    
    }
    

?>