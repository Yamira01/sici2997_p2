<style> /*mis tricks de css*/
#nombreiz:after{visibility: visible;content: "LOG IN";margin-left:-90px;
} /*anade nombre despues del id */
#nombreiz{visibility: hidden;
}
#inicio{visibility: visible;
}
#login{visibility: hidden;
}
</style>
<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>
<body>
 <!--Forma del lOG IN-->
 <div class="container-fluid"  style="padding:100px 48px"  > 
        <div class="row">
            <div class="col-sm">&nbsp;</div>
            <div class="col-sm">
             <form method="post" action="index.php?a=doLogin">
              <div class="form-group">
              <label for="username">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?php echo $uname; ?>">
            <input type="hidden" name="action" value="login">
          </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
               <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-check">
                 <label class="form-check-label">
                <input type="checkbox" name="check" class="form-check-input">
              Check me out
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">LOG IN</button>
                </form>
            </div>
            <div class="col-sm">&nbsp;</div>
        </div>
    </div>
 

