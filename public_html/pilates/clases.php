<style>
  #mySidebar{

margin-top:60px;
overflow: hidden;
}

#botontop{
 display: none;
}
</style>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" style="padding:50px 50px 50px 300px " id="about">
  <h3 class="w3-center">BENEFICIOS DE PILATES</h3>
  <p class="w3-center"><em>Pilates es una serie de ejercicios que se enfoca en fortalecer y aumentar la flexibilidad de su núcleo, mejorando el tono y la postura muscular mientras aplana su estómago y aumenta la estabilidad de la espalda.</em></p>
  
  <ul class="w3-ul w3-card-4" style="width:100%">
  <li>Aísla, activa y condiciona los músculos profundos</li>
  <li>Desarrolla la fuerza abdominal central</li>
  <li>Alisa los músculos abdominales y restaura la postura de la columna vertebral</li>
  <li>Desarrolla fuerza, flexibilidad y resistencia</li>
   <li>Tonifica y alarga sin agregar volumen</li>
	<li>Mejora el rendimiento atlético (golf, tenis, correr, andar en bicicleta, etc.)</li>
	<li>Mejora la movilidad y la agilidad (osteoporosis, artritis)</li>
	<li>Alivia el dolor y la tensión</li>
	<li>Aumenta la circulación</li>
  </ul>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:50px 50px 50px 300px " id="team">
  <h3 class="w3-center">VIDEOS</h3>
  <p class="w3-center w3-large">
Nuestras clases incluyen Matres, sillas, Toalla y "Foam Roller" .</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <iframe style="width:100%" class="w3-hover-opacity" src="https://www.youtube.com/embed/lCg_gh_fppI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="w3-container">
          <h3>Full Body Movement</h3>
          <!--<p class="w3-opacity">CEO & Founder</p> -->
          <p>Descripción del ejercicio </p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
         <iframe style="width:100%" class="w3-hover-opacity" src="https://www.youtube.com/embed/lCg_gh_fppI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="w3-container">
          <h3>Flexion and Extension</h3>
         <!-- <p class="w3-opacity">Art Director</p>-->
          <p>Descripción del ejercicio</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
         <iframe style="width:100%" class="w3-hover-opacity" src="https://www.youtube.com/embed/lCg_gh_fppI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="w3-container">
        <h3>Breath + Core Activation </h3>
          <!--  <p class="w3-opacity">Web Designer</p>-->
          <p>Descripción del ejercicio</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
         <iframe style="width:100%" class="w3-hover-opacity" src="https://www.youtube.com/embed/lCg_gh_fppI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="w3-container">
          <h3>Mat Workout</h3>
          <!--<p class="w3-opacity">Designer</p>-->
          <p>Descripción del ejercicio</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
  </div>
  
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:230px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Videos</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button"></a>
    	<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Enfoque de ejercicio <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Enfoque</a>
      <a href="#" class="w3-bar-item w3-button">Brazos</a>
      <a href="#" class="w3-bar-item w3-button">Piernas</a>
      <a href="#" class="w3-bar-item w3-button">ABS</a>
	  <a href="#" class="w3-bar-item w3-button">Cardio</a>
    </div>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Niveles <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Videos por niveles</a>
      <a href="#" class="w3-bar-item w3-button">Beginner</a>
      <a href="#" class="w3-bar-item w3-button">Intermediate</a>
      <a href="#" class="w3-bar-item w3-button">Hard</a>
    </div>
    
    <a href="#" class="w3-bar-item w3-button">Todos</a>
   
  </div>

</nav>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
