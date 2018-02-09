<?php
echo 'Hola SICI4997!eeeeeeeeeeeeeeeeeeeeeeeeeeeeefefwefee<br>';//print
//tipos de comentario

#comentario
//comentario

/*Hola      
*como
*estas
*que hace la funcion y yaaaaaaaaaaaaaaaaaaaaaaaaaaaa
*/

echo 'Hola<br>'; //Saludando

echo 'Como estas?<br>'; # preguntando
//asignacion de variables con el $
$nota =  'A';//inicializar variables 
$promedio = 3.5;
$notas= ['A','B','C', 'D','F'];//arrays

$temp=[];
$temp= array();//forma vieja
//uniendo variables y variables e imprimiendo
echo 'Yo quiero en esta clase sacar ';

echo $nota;

echo ' para de esa forma tener un promedio de: ';
echo $promedio;

echo '<br>';

$quizz= 8;
$quizzTotal = 10;

$promedioQuizz = ($quizz / $quizzTotal)* 100;//operadores aritmeticod

echo 'Saque en el quiz un promedio de : ';
echo $promedioQuizz; //80
echo '%<br>';

echo 'Después del bono, saque en el quizz: ';
echo $promedioQuizz++;//80
echo '%<br>';

echo 'Después del bono, saque en el quizz: ';
echo ++$promedioQuizz;//81
echo '%<br>';
//operaciones matematicas
echo '5 + 6= ';
echo (5 + 6);
echo '<br>';

//operadores de 
//

$quince = 15;
$quince /= 3; //15/3 y lo guarda en 15= 5

echo $quince;
echo '<br>';


$intro = 'Mi nombre es';
//. concatenar 
$intro .= ' Yamira Quinones Ortiz';

echo $intro . '<br>' . 'Después<br>';

//true imprime un 1, vacia es falso
$outcome = ($promedioQuizz > 80);//operacion de comparacion

echo 'Suma  más de 80 el quizz' . $outcome. '<br>';

$outcome2 = ($promedioQuizz <= 80);

echo 'Suma  menos de 80 el quizz' . $outcome2 . '<br>';

//operaciones logicos y de comparacion
$notaF= ($promedioQuizz< 60);
$notaD = ($promedioQuizz >= 60 && $promedioQuizz < 70);
$notaC = ($promedioQuizz >= 70 && $promedioQuizz < 80);
$notaB = ($promedioQuizz >= 80 && $promedioQuizz < 90);
$notaA = ($promedioQuizz >= 90);
echo 'Notas: ' . '<br>';
echo 'Tiene A?' . $notaA. '<br>';
echo 'Tiene B?' . $notaB. '<br>';
echo 'Tiene C?' . $notaC. '<br>';
echo 'Tiene D?' . $notaD. '<br>';
echo 'Tiene F?' . $notaF. '<br>';


?>