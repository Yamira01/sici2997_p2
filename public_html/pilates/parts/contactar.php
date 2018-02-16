<style>
#nombreiz:after{visibility: visible;content: "CONTACTAR";margin-left:-90px;
} /*anade nombre despues del id */
#nombreiz{visibility: hidden;
}
#inicio{visibility: visible;
}
#contactar{display: none;
}
</style>
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">

  <p class="w3-center w3-large">Revisamos el correos electrónicos todos los días y respondemos lo antes posible.</p>
 
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Aibonito, PR</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> 787-897-8908</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: adaptandoelmovimiento@gmail.com</p>
      <br>
	  <br>
		<br>
		<br>
		<br>	
		<br>	
		<br>
      <form method="post"  action="index.php?a=mensaje" target="_blank" >
        <p><input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Asunto" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="Message"></p>
		<br>
		<br>
		<br>
		<br>	
		<br>	
		<br>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> ENVIAR
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half">
     
      <img src="html/instructor2.jpg" alt="Norway" style="width:500px; height:800px;" class="w3-hover-opacity">
    </div>
  </div>
</div>
