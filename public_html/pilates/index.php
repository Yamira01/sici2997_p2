<?php
$maxSessionTime = 60 * 30; // 30 minutes
session_start();
date_default_timezone_set('EST');
$action = (isset($_GET['a'])) ? $_GET['a'] : '';
include 'db.php';
include './classes/User.php';
include './classes/admin.php';
if (isset($_SESSION['userID'])) {

    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
           // showError('Unauthorized access! Session destroyed!');
        }
    }
}


 include './parts/header.php';

if ($action == 'login') {
    include './parts/login.php';
    
} else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
    
    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './parts/login.php';
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: index.php');
    } else {
        showError('The entered password is incorrect!');
        include './parts/login.php';
    }
} else if ($action == 'register') {
    include './parts/register.php';
} else if ($action == 'doRegister') {
    $u = User::loadFromUsername($_POST['username']);
    
    if ($u) {
        showError('The username already exist.');
        include './parts/register.php';
   
    } else {
        $u = new User();
        
        $u->username = $_POST['username'];
        $u->password = $_POST['password1'];
        $u->email = $_POST['email'];
        $u->save();
        showSuccess('Un paso más, escoge el paquete que desees!');
    include './parts/suscribe.php';  
    }
}
/*else if ($action == 'admin') {
    $do = (isset($_GET['do'])) ? $_GET['do'] : '';
    if ($do == 'remove') {
    }
} else if ($action == 'avideos') {
 $loggedUser->SecurityID==1
$loggedUser-> SecurityID == 1;
If loggedUser bla bla bla securityID == 1
if ($loggedUser){
 
 foreach ( $loggedUser as $loggedUser ) {
 $loggedUser->SecurityID == 1;
	}

    include './parts/avideos.php';
    }
else {
showError('No eres el admi');
}
}*/
else if ($action == 'dovideos') {
 $do = (isset($_GET['do'])) ? $_GET['do'] : '';
 
 if (isset($_POST['Nombre_video'])) {
  $u = admin::loadFromNombre_video($_POST['Nombre_video']);
 }
 
 if ($do == 'remover') {
    $videoId = (isset($_GET['videosId'])) ? $_GET['videosId'] : '';
    $delete = deleteFromSQL('DELETE FROM Tbl_Videos WHERE ID_Videos = ?', [$videoId]);
    showSuccess('Su video ha sido eliminado');
    
    include './parts/eVideos.php';  
  } else if ($u) {
        showError('The nombre del video already exist.');
        include './parts/avideos.php';

    } else {
      $u = new admin();
      
      $u->Nombre_video = $_POST['Nombre_video'];
      $u->Enfoque_de_ejercicio = $_POST['Enfoque_de_ejercicio'];
      $u->Nivel=$_POST['Nivel'];
      $u->link = $_POST['link'];
      $u->save();
      
      showSuccess('Su video ha sido añadido');
      include './parts/eVideos.php';
    }
  
  
  
}else if ($action == 'eVideos'){
   include './parts/eVideos.php';
}

else if ($action =='clases') {
   include './parts/clases.php';
    
}

else if ($action =='suscribe') {
   include './parts/suscribe.php';
    
}
else if ($action =='sobrenosotros') {
   include './parts/sobrenosotros.php';
    
}
else if ($action =='avideos') {
   include './parts/avideos.php';
    
}

else if ($action =='instructor') {
   include './parts/instructor.php';
    
}
else if ($action =='contactar') {
   include './parts/contactar.php';
    
}
else if ($action =='mensaje') {
   include './parts/mensaje.php';
    
}
else {
    include './parts/body.php';
}
include './parts/footer.php';
//echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
if (isset($_SESSION['loginTime'])) {
   // echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}
function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}
function showSuccess($msg) {
    echo '<div style="text-align: center;color:black;font-size:40px " class="alert alert-success" role="alert">' . $msg . '</div>';
}
?>
