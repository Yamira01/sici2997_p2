<?php
//me devuelve un array true or false
date_default_timezone_set('EST');
$action = (isset($_GET['a'])) ? $_GET['a'] : '';
include 'db.php';
include './classes/User.php';

if ($action =='isUsernameAvailable'){
    
    $username = $_GET ['u'] ??  '';  //si es nulo el usuario lo ponga vacio
    
    $out = ['availaible'=> true];
     $user = User::loadFromUsername($username);
    if ($user != null){
    $out = ['available'] = false;
    
    }
   echo json_encode($out);
}


?>