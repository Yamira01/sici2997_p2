
<!DOCTYPE html>
<html>
<title>Registrate</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico"/>
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
header{
 
 display: none;
}
#botontop{
 display: none;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button w3-wide">REGISTRATE</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
  
      <a href="sobrenosotros.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>SOBRE NOSOTROS</a>
      	  <a href="instructor.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>INSTRUCTOR</a>

      <a href="contactar.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>CONTACTAR</a>
	  <a href="index.php" class="w3-bar-item w3-button"><!--<i class="fa fa-th"></i>-->INICIO</a>
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
  <a href="sobrenosotros.html" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE NOSOTROS</a>
     <a href="instructor.html" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTOR</a>

  <a href="contactar.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTAR</a>
</nav>

 
 
<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>
<div style="padding:100px 48px" >
  <div class="row">
    <div class="col-sm-3" >
      &nbsp;
    </div>
    <div class="col-sm-6">
     <div name="registerErrors">
            
        </div>
        <form method="post" action="index.php?a=doRegister">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Ingrese nombre de usuario" value="<?php echo $uname; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese email" value="">
          </div>
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" class="form-control" name="password1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="password2">Repeat Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Repeat Password">
          </div>
          <button name="registerButton" type="submit" class="btn btn-primary"> Register </button>
        </form>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div><!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
	<!-- nav resize-->
<script>


// Toggle between showing and hiding the sidebar when clicking the menu icon
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
	
	</body>
</html>
