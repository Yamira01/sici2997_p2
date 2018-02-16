<?php
$arr = ['Enero', 'Febrero', 'Marzo', 'Abril'];
echo '<pre>' . print_r($arr, true) . '</pre>';
$arr2 = ['Jan' => 'Enero',
         'Feb' => 'Febrero',
         'Mar' => 'Marzo',
         'Abr' => 'Abril'];
echo date('M') . '<br />';
echo $arr2[date('M')] . '<br />';
echo $arr2['Feb'] . '<br />';
echo '--- Foreach 1 ---<br /><br />';
foreach($arr2 as $abr => $name) {
    echo "{$abr} = {$name}<br />";
}
echo '--- Foreach 2 ---<br /><br />';
foreach($arr2 as $name) {
    echo "{$name}<br />";
}
echo '--- For 1 ---<br /><br />';
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br />';
}
//record de una persona
$employee = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];

             //segunda habilidad del array
             //$employee [skills]. 1
echo '<pre>' . print_r($employee, true) . '</pre>';
             
?>
<table border="1">
    <tr>
        <td><b>Field</b></td>
        <td><b>Value</b></td>
    </tr>
<?php
foreach ($employee as $f => $val) {
    /*if (is_array($val)) {
        $out = implode('; ', $val);
    }*/
    
    if (is_array($val)) {
        $out = '';
        
        foreach($val as $k => $v) {
            $out .= "(" . ($k + 1) . ") $v<br />";
        }
    } else {
        $out = $val;
    }
    
    echo "<tr>
        <td><b>$f</b></td>
        <td>$out</td>
    </tr>";
}
?>
    
</table>
<?php

//inicializo array vacio

$names = [];

$names[0]= 'Omar';
$names[1]= 'Miguel';
$names[2]= 'Sandra';


echo '<pre>' . print_r($names, true) . '</pre>';


$names[]= 'Joshua';
$names[]= 'Wilfredo';
$names[]= 'Eli';
$names['otro']= 'Yamira';

echo '<pre>' . print_r($names, true) . '</pre>';


$employees=[];

$employee = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];

$employees = ['name' => 'Jerry',
             'age' => 52,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['office',
                          'SPSS',
                          'Windows'
                          ],
             ];

             
echo '<pre>' . print_r($employees, true) . '</pre>';

//implode (join) va a unir el array

echo implode (';',$employee['skills']) . '<br />';
$line = 'Omar,25, 19/Feb/89,omarpr@gmail.com';
//explitiar un string en un array (dividir)
$arr3 = explode(',', $line);

echo '<pre>' . print_r($arr3, true) . '</pre>';


//ej

$email = 'omar.soto@upr.edu';
$split = explode('@', $email);//omarsoto2
echo 'First part of emails is: ' . $split[0] . '<br />';
$first = '';
//otro ejemplo

for ($i = 0; $i < strlen($email); $i ++){
    
//para que me de el caracter

//te lso da todos los caracter
//echo $email[$i] . '<br />';

if ($email[$i] == '@') {
    echo substr($email, 0, $i) . '<br />';
    break;
    
} else {
    $first .= $email [$i];
    
}
}
//srrpos posicion
echo substr($email, 0, strpos($email, '@')) . '<br />';

?>