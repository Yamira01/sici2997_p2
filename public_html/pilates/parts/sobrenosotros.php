<!DOCTYPE html>
<html>
<title>Sobre Nosotros</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

#botontop{
 visibility: hidden; 
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button w3-wide">SOBRE NOSOTROS</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php?a=login" class="w3-bar-item w3-button">LOG IN</a>
      <a href="clases.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i>CLASES</a>
	  	  <a href="instructor.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>INSTRUCTOR</a>
      <a href="contactar.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTAR</a>
	   <a href="index.html" class="w3-bar-item w3-button"><!--<i class="fa fa-th"></i>-->INICIO</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="longin.html" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
     <a href="instructor.html" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTOR</a>
  <a href="suscribe.html" onclick="w3_close()" class="w3-bar-item w3-button">SUSCRIPCIÓN</a>
  <a href="contactar.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTAR</a>
</nav>




 <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">SOBRE NOSOTROS</h3>
	<p>Nuestra misión es ayudarte a construir un cuerpo en el que puedas confiar. </p>
    <p>Adaptando el movimiento crea la página en su afán de acercar el pilates a las personas, se desarrolla con dos claros objetivos, llegar allá donde no tiene presencia física y ofrecer la posibilidad de hacer pilates con profesorado de alto nivel donde uno quiera. El negocio comenzó reciente en el año 2017, formación destinada, por un lado, a perfeccionar la práctica de algunos grupos  y, por otro, a la profundización en el pilates como camino de crecimiento y realización.
    </p>
  </div>
