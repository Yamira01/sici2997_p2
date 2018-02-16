

<style>
#nombreiz:after{visibility: visible;content: "REGÍSTRATE";margin-left:-90px;
} /*anade nombre despues del id */
#nombreiz{visibility: hidden;
}
#inicio{visibility: visible;
}
#register{display: none;
}
</style>
<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>
 <!--Forma del REGISTER-->
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
          <button name="registerButton" type="submit" class="btn btn-primary">REGISTER</button>
        </form>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div>
