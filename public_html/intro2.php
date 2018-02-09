<?php

echo 'Yamira Quiñones<br>';


echo "Hola<br>";//evalúa la linea

$name='Yamy';
$fName= 'Quinon';
echo 'Mi nombre es ....' . $name . '<br>';

//<br> brinco de linea
echo "Mi nombre es .... $name. <br>";
echo "Mi nombre es .... $name $fName<br>";

echo "Mi nombre es .... {$name} a<br>";//anadir a


echo "Mi nombre es .... \$name \$fName<br>";//para que salga nombre de variable
echo '\xF0\x9F\x98\x81<br>';//interpreta lo que esta escrito
echo "\xF0\x9F\x98\x81<br>";
echo 'Linea1\nLinea2\nLinea34\n';//no sirve solo se interpreta con una comilla
echo "Linea5\nLinea6\nLinea7\n";//comillas dobles interpretan lo que esta dentro 
echo nl2br("Linea 1\nLinea2\nLinea3\n");//todos los new line to br
//php

//true or false
$a= 'Prueba<br>';
echo 'Is String?' . is_string($a) . '<br>';

$b=20;
echo 'Is String?' . is_string($b) . '<br>';
echo 'Is Numeric?' . is_numeric($b) . '<br>';

echo "5" + 5 . '<br>';
echo 5 + '5' . '<br>';

$letra= '25';
echo (int)$letra * 20 . '<br>';
echo '<br>';
echo '<br>';
//constantes



//constantes en letra mayuscula

define ('MUNICIPAL_TAX', 0.005);
define ('STATE_TAX', 0.11);
//dos constantes

$price = 25;
$taxes= ($price * (MUNICIPAL_TAX + STATE_TAX) );
$taxes = round($taxes, 2);//dos decimales al tax
$total= $price + $taxes;
echo "Item price: $price<br>";



echo "Taxes: $taxes<br>";
echo "Total: $total<br>";

//Funciones- devuelve un valor
//que no tiene retorno void
//En php podemos retornar o no retornar
//scope (las variables dentro de las funciones que no afectan las globales etc)
//rutina que calcule el precio de producto

echo "Item Price: $price<br>";
echo "Taxes: $taxes<br>";
echo "Total: $total<br>";
//si no me mandas nombre del producto puedes ponerme undifined
function showIVU($price, $desc = 'UNDEFINED') {
    $taxes= calculateIVU($price);
    $total= $price + $taxes;
    echo '<br>';
    echo "Name: $desc<br>";
    echo "Item Price: $price<br>";
    echo "Taxes: $taxes<br>";
    echo "Total: $total<br>";
    echo '<br>';
}


function calculateIVU($price){
     $taxes= ($price * (MUNICIPAL_TAX + STATE_TAX) );
    $taxes = round($taxes, 2);//dos decimales al tax
    
    return $taxes;//hace q la funcion retorne un valor
    //return round($taxes, 2);
}



showIVU (9.99);
showIVU(5, 'Toilet Paper');
showIVU(1.99, 'Hand Sanitizer');

//funcion que retorna valor del ivu
 $scope1= 'Hola';


function testScoping() {
    global $scope1;
    echo $scope1 . '<br>';
}

function isA($grade) {
    return ($grade >= 90);
    
}
//$time en milisegundos, time nula
function showDate ($time = null){
    if ($time == null){
        
        $time = time();
    }
    echo date('g:i:s a',$time);
}

testScoping();
echo '<br>';
echo 'is A 95?' .  isA(95) . '<br>';
echo 'is A 100?' .  isA(100) . '<br>';
echo 'is A 80?' .  isA(80) . '<br>';
echo '<br>';
showDate();
echo '<br>';
//sleep(10);
echo '<br>';
showDate();
showDate(time() + 1);


//Funciones Comunes
echo '<br>';
echo strrev ('HOLa');
echo str_repeat("\xF0\x9F\x98\x81<br>", 10) . '<br>';
echo strtoupper('yamy');
echo strtolower('QUINONES');
echo str_replace ('a', 'i', "Me llamo yamira");
echo str_replace(['a', 'e', 'o', 'u', 'A', 'E', 'O', 'U'], 'i', 'Me llamo Omar') . '<br>';
echo ucfirst('OMAR') . '<br>';

$name = 'OMar';
$fname = 'soto';
//cambia el primer caracter del string
echo ucfirst(strtolower($name)) . ' '. ucfirst(strtolower($fname)) . '<br>';
echo '<pre>' . print_r($_GET, true) . '</pre></br>';
echo '<pre>' . print_r($_REQUEST, true) . '</pre></br>';

?>