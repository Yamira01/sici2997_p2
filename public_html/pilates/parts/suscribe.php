<!DOCTYPE html>
<html>
<title>Subscribe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon.ico"/>
</head>

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
 display: none;
}
</style>
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button w3-wide">SUSCRIPCIÓN </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="longin.html" class="w3-bar-item w3-button">LOG IN</a>
      <a href="sobrenosotros.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>SOBRE NOSOTROS</a>
      <a href="clases.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i>CLASES</a>
	  <a href="instructor.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>INSTRUCTOR</a>    
	  <a href="contactar.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>CONTACTAR</a>
	    <a href="index.html" class="w3-bar-item w3-button"><!--<i class="fa fa-envelope"></i> -->INICIO</a>
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
  <a href="sobrenosotros.html" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE NOSOTROS</a>
   <a href="instructor.html" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTOR</a>
  <a href="suscribe.html" onclick="w3_close()" class="w3-bar-item w3-button">SUSCRIPCIÓN</a>
  <a href="contactar.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTAR</a>
</nav>
<!-- Pricing Section -->
<div class="w3-container w3-center w3-light-grey" style="padding:128px 16px" id="pricing">
  <h3>PRECIOS</h3>
  <p class="w3-large">¡Elige tu precio, elige tu plan!</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Gratis</li>
        <li class="w3-padding-16"><b>$ 0</b></li>
        <li class="w3-padding-16"><b>Acceso limitado a entrenamientos de Pilates de primer nivel, ideales para todas las edades y niveles de habilidad.</b></li>
        <li class="w3-padding-16"><b>Servicio al cliente receptivo y personal.</b></li>
        <li class="w3-padding-16"><b>Programa de entrenamiento semanal gratuito</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 0</h2>
          <span class="w3-opacity">Free</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
         <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="adaptandoelmovimiento@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Gratis">
  <input type="hidden" name="amount" value="0.00">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Prompt buyers to enter the quantities they want. -->
  <input type="hidden" name="undefined_quantity" value="1">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-48">MENSUAL</li>
        <li class="w3-padding-16"><b>$ 19 USD / mes</b></li>
		<li class="w3-padding-16"><b>¡Ahorre tiempo, dinero y cree su cuerpo perfecto y delgado de Pilates por solo una clase de estudio!</b></li>
        <li class="w3-padding-16"><b>Acceso ilimitado a entrenamientos de Pilates de primer nivel, ideales para todas las edades y niveles de habilidad.</b></li>
        <li class="w3-padding-16"><b>Programa de entrenamiento semanal gratuito</b></li>
        <li class="w3-padding-16"><b>Servicio al cliente receptivo y personal.</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 19</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
         <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="adaptandoelmovimiento@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Mensual">
  <input type="hidden" name="amount" value="19.00">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Prompt buyers to enter the quantities they want. -->
  <input type="hidden" name="undefined_quantity" value="1">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">ANUAL</li>
        <li class="w3-padding-16"><b>$ 149 USD / mes</b></li>
		<li class="w3-padding-16"><b>Ahorre $ 79 en comparación con el plan mensual cuando elige una membresía anual.</b></li>
        <li class="w3-padding-16"><b>Acceso ilimitado a entrenamientos de Pilates de primer nivel, ideales para todas las edades y niveles de habilidad.</b></li>
        <li class="w3-padding-16"><b>Programa de entrenamiento semanal gratuito</b> </li>
        <li class="w3-padding-16"><b>Servicio al cliente receptivo y personal.</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 149</h2>
          <span class="w3-opacity">per year</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="adaptandoelmovimiento@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Anual">
  <input type="hidden" name="amount" value="149.00">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Prompt buyers to enter the quantities they want. -->
  <input type="hidden" name="undefined_quantity" value="1">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
        </li>
      </ul>
    </div>
  </div>
</div>


