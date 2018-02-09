<?php
include_once 'config.php';
echo '<pre>' . print_r($_GET, true) . '</pre>';

//para el get
//?a=valor&b=5&lang=es&page=

//operadores de precedencia
//isset chequea si un a variable esta definida  o no
//empty valida si esta def y si tiene una variable adentro
if (isset($_GET['prince'])){
    $price = $_GET['price'] * 5;
    echo"Price x 5: $price<br>";
    
}

else

{
    echo 'No need to calculate price.<br>';
    
}

$page = (isset($_GET['page'])) ? $_GET['page'] : '';

/*if (empty($page)) {
    $page='home';
    
}
if ($page == 'home')  {
    echo' Welcome to home!<br>';
    
} else if  ($page== 'form') {
    include 'Form.php';
    
    
} else{//no tiene pagina{
    
    echo 'You didnt selected any page!';

}
}*/
//switch

switch ($page) {
    case 'home':
        echo 'Welcome home!<br>';
        break;
    case 'form' :
        include 'Form.phpa';
        break;
    default: 
        echo'You did not select any page!';
        break;
}
    
   echo 'Despues del switch<br>'; 

//include and require
//while
//llega  a21
$i=0;
while (true) {
    echo "$i <br>";
    
    if ($i++ > 20) {
        break;
    }
}

//llega a 20

$i=0;
echo '<select>';
while($i++ < 20) {
    $sel = ($i == 5) ? ' selected' :  '';
    
    echo "<option$sel>Option $i </option> <br>";
    }
    echo '</select>';
    
    

?>