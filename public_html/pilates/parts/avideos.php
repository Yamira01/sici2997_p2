<style>
#botontop{visibility: hidden; 
}/*escondo el boton*/
#nombreiz:after{visibility: visible;content: "SUBIR VIDEOS";margin-left:-90px;
} /*anade nombre despues del id */
#nombreiz{visibility: hidden;
}
#inicio{visibility: visible;
}
</style>
<body>
 
<?php  
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>
<!--FORMA PARA ANADIR VIDEOS A LA BASE DE DATOS-->
<div style="padding:100px 48px" >
  <div class="row">
    <div class="col-sm-3" >
      &nbsp;
    </div>
    <div class="col-sm-6">
        <form method="post" action="index.php?a=dovideos">
          <div class="form-group">
            <label for="Nombre_video">Nombre del video</label>
            <input type="text" class="form-control" name="Nombre_video" aria-describedby="emailHelp" placeholder="Ingrese nombre del video" value="<?php echo $uname; ?>">
          </div>
          <div class="form-group">
            <label for="Enfoque_de_ejercicio">Enfoque del ejercicio</label>
            <input type="text" class="form-control" name="Enfoque_de_ejercicio" aria-describedby="emailHelp" placeholder="Ingrese el enfoque del ejercicio" value="">
          </div>
           <div class="form-group">
            <label for="Nivel">Nivel de ejercicio</label>
            <input type="text" class="form-control" name="Nivel" aria-describedby="emailHelp" placeholder="Ingrese el nivel del ejercicio" value="">
          </div>
            <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="link" aria-describedby="emailHelp" placeholder="Ingrese el link del video" value="">
          </div>
          <button name="Botton video" type="submit" class="btn btn-primary"> Añadir</button>	

        </form>          
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div>
 
	</body>
</html>
