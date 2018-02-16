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
    
   //  retorna un user por el id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM Tbl_Username WHERE id=" . $id;
	$result = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($result);
	return $user;
}

function deleteFromSQL($sql, $values = []) {
  global $db;

  $stmt = $db->prepare($sql);
  $stmt->execute($values);

  return $stmt->errorInfo();
 
}
?>