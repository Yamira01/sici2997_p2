<?php
$dbHostname = 'localhost';
$dbDatabase = 'wilfredo_bernier';
$dbUsername = 'wilfredo.bernier';
$dbPassword = '0570';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);


 function getResultFromSQL($sql, $values= []) {
    global $db;
    
    
    $stmt=$db->prepare($sql);
    $stmt->execute($values);
   return $stmt->fetchAll();
    
    }

?>