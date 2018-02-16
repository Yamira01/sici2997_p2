<!DOCTYPE html>
<html>
<title>TPE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Bootstrap core CSS/utilizamos en login y register -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="html/icon.ico"/>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {height: 100%;line-height: 1.8;}
/*imagen del header*/
.bgimg-1 {  background-position: center;background-size: cover; background-image: url("html/header.jpg");min-height: 100%;}
.w3-bar .w3-button {padding: 16px;}
#inicio{visibility: hidden;}

</style>

<body>
  
<br><br>
<!--Enlaces de navegacion situados a la izquierda -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a id="nombreiz" href="#home" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i>INICIO</a> 
    <a id="inicio" href="index.php" class="w3-bar-item w3-button w3-wide w3-hide-small"><i class="fa fa-home"></i>INICIO</a>
    <!-- Enlaces de navegacion a la derecha -->
     <div class="w3-right w3-hide-small">
      
<?php
//intente if (!isset($loggedUser)&&($loggedUser->SecurityID==1)) pero decia que la variable no esta definida
if (!isset($loggedUser) ) {//usuario no conectado
?>
    <a id="login" href="index.php?a=login" class="w3-bar-item w3-button"><i class="fa fa-sign-in" aria-hidden="true"></i> LOG IN</a>
    <a id="register" href="index.php?a=register" class="w3-bar-item w3-button"><i class="fa fa-address-card"></i> REGISTER</a>
 
<?php
} else {
  //si el usuario esta conectado 
  echo '<span style="color: black; font-size: 90%; font-weight: bold;" > Hola ' . $loggedUser->username  . '</span>&nbsp&nbsp&nbsp;';
?>
              
    <a href="index.php?a=logout" class="w3-bar-item w3-button w3-wide">LOGOUT</a>
    <!--al usuario que este log in puede acceder a los videos-->
    <a id ="clases" href="index.php?a=clases" class="w3-bar-item w3-button"><i class="fa fa-th"></i> CLASES</a>    
    <a id="av" href="index.php?a=avideos" class="w3-bar-item w3-button"> <i class="fa fa-plus"></i> SUBIR VIDEOS </a>
    <a id="ev" href="index.php?a=eVideos" class="w3-bar-item w3-button"><i class="fa fa-minus"></i> ELIMINAR VIDEOS</a>
      
           
<?php
}
?>
    <a id="sn" href="index.php?a=sobrenosotros" class="w3-bar-item w3-button"><i class="fa fa-users" aria-hidden="true"></i> SOBRE NOSOTROS</a>
    <a id="instructor" href="index.php?a=instructor" class="w3-bar-item w3-button" disabled><i class="fa fa-user"></i> INSTRUCTOR</a>
    <a id="contactar"  href="index.php?a=contactar" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTAR</a>
  
</div>
         
    <!-- icono de menu (el hamburger)-->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
    <i class="fa fa-bars"></i>
    </a>
</div>

          <!-- Navegation bar que se muestra cuando se achica la pantalla y le das click al menu-->
          <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
            <a href="index.php?a=index" onclick="w3_close()" class="w3-bar-item w3-button">INICIO</a>
            <a id="login" href="index.php?a=login" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
            <a href="index.php?a=sobrenosotros" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE NOSOTROS</a>
            <a href="instructor.html" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTOR</a>
            <a href="index.php?a=contactar" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTAR</a>
            <a href="index.php?a=clases" onclick="w3_close()" class="w3-bar-item w3-button ">CLASES</a>
            <a href="index.php?a=register" onclick="w3_close()" class="w3-bar-item w3-button ">REGISTRATE</a>
          </nav>
</div>

