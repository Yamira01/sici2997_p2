<!DOCTYPE html>
<html>
<title>TPE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="icon.ico"/>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("header.jpg");
    min-height: 100%;

}
.w3-bar .w3-button {
    padding: 16px;
}

</style>
<body>
<br><br>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">INICIO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      
      <?php
//para cambiar boton cuando el usuario se registre
if (!isset($loggedUser)) {
?>
<a href="index.php?a=login" class="w3-bar-item w3-button">LOG IN</a>

  <a href="index.php?a=register" class="w3-bar-item w3-button">REGISTRATE</a>
 
<?php
} else {
  //si el usuario esta conectado cambia boton
  echo '<span style="color: black; font-size: 90%; font-weight: bold;" > Hola! ' . $loggedUser->username . '</span>&nbsp&nbsp&nbsp;';
?>
            <a href="index.php?a=logout" class="w3-bar-item w3-button w3-wide">LOGOUT</a>
            
      

<?php
}
?>
   
      <a href="index.php?a=sobrenosotros" class="w3-bar-item w3-button"><i class="fa fa-user"></i>SOBRE NOSOTROS</a>
      <a href="index.php?a=clases" class="w3-bar-item w3-button"><i class="fa fa-th"></i>CLASES</a>
	  <a href="instructor.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>INSTRUCTOR</a>
      <a href="index.php?a=suscribe" class="w3-bar-item w3-button"><i class="fa fa-usd"></i>SUSCRIPCIÓN</a>
      <a href="contactar.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTAR</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="longin.php" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
  <a href="sobrenosotros.html" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE NOSOTROS</a>
    <a href="instructor.html" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTOR</a>
  <a href="suscribe.html" onclick="w3_close()" class="w3-bar-item w3-button">SUSCRIPCIÓN</a>
  <a href="contactar.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTAR</a>
</nav>
</div>
