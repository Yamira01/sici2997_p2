<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a id="botontop" href="#top" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a> <!--boton me lleva hacia arriba-->
  <div class="w3-xlarge w3-section">
    <a class="fa fa-facebook-official w3-hover-opacity" href="https://www.facebook.com/PilatesStyle/"></a><!--link funcional de muestra-->
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p title="W3.CSS" target="_blank" class="w3-hover-text-green">2017 Adaptando el Movimiento. Todos los derechos reservados.</p>
</footer>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
 <script src="main.js" type="text/javascript"></script>

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

// Esta funcion hace que la que cierre el sidebar, cuando le das click en close.
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
</body>
</html>