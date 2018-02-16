
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
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("html/header.jpg");
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
  echo '<span style="color: black; font-size: 90%; font-weight: bold;" > Hola ' . $loggedUser->username . '</span>&nbsp&nbsp&nbsp;';
?>
            <a href="index.php?a=logout" class="w3-bar-item w3-button w3-wide">LOGOUT</a>
                <!--al usuario que este log in puede acceder a los videos-->
          <a href="index.php?a=clases" class="w3-bar-item w3-button"><i class="fa fa-th"></i> CLASES</a>
    
          
<style>#botonclase{ display:none;
}
</style>


<?php
}
?>
   
      <a href="index.php?a=sobrenosotros" class="w3-bar-item w3-button"><i class="fa fa-user"></i> SOBRE NOSOTROS</a>
	  <a href="index.php?a=instructor" class="w3-bar-item w3-button" disabled><i class="fa fa-user"></i> INSTRUCTOR</a>
      <a href="index.php?a=contactar" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTAR</a>
     <a id= "botonclase" href="index.php?a=register" class="w3-bar-item w3-button"><i class="fa fa-th"></i> CLASES</a>
    </div>
         
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
   <a href="index.php?a=index" onclick="w3_close()" class="w3-bar-item w3-button">INICIO</a>
  <a href="index.php?a=login" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
  <a href="index.php?a=sobrenosotros" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE NOSOTROS</a>
    <a href="instructor.html" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTOR</a>
  <a href="index.php?a=suscribe" onclick="w3_close()" class="w3-bar-item w3-button">SUSCRIPCIÓN</a>
  <a href="index.php?a=contactar" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTAR</a>
   <a href="index.php?a=register" onclick="w3_close()" class="w3-bar-item w3-button ">CLASES</a>
</nav>
</div>

<form>
  <div action="upload.php" method="post" enctype="multipart/form-data">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">DELETE</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
  
  
  <?php

// Read from DB

$data = [];

$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];
$data[] = ['MERC-3115', 'M06', 'PRINCIPIOS DE MERCADEO'];


foreach($data as $rec) {
    echo "<tr>
								<td>$rec[0]</td>
								<td>$rec[1]</td>
								<td>$rec[2]</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>";
}

?>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a id="botontop" href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a class="fa fa-facebook-official w3-hover-opacity" href="https://www.facebook.com/PilatesStyle/"></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p title="W3.CSS" target="_blank" class="w3-hover-text-green">2017 Adaptando el Movimiento. Todos los derechos reservados.</p>
</footer>
 <!-- nav resize-->
<script>


// cuando la pantalla se pone pequeña se muestra el menu , le das click y muestra el side bar
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
   <script src="http://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <script src="main.js" type="text/javascript"></script>
</body>
</html>
