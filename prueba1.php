<?php
//comentario una linea

/*
varias
lineas
*/

print('Hola que hace ');
echo "Hola universo \n";


//tipos variables

$boolean = true; //TRUE or true
$bollean = false; //FALSE or false

$int1 = 12;
$int2 = -12;
$int3 = 012; //octal
$int4 = 0x0F; //hexadecimal


$float = 1.234;
$float2 = 1.2e3; //1200
$float3 = 7E-10;

unset($init1); //quitar el valor de la variable
 var_dump($float);
 var_dump($int4);

 $sum = 1 + 1;
 $res = 2 - 1.0;
 $mul = 6*5;
 $div = 6/2;

 var_dump($res);
 var_dump($div);

 $num=0;
 $num+=1;

 echo $num++;//1
 echo ++$num;//3

 $num -=2;
 $num /= $float;

 //STRING
$num = 5;
 $varString = '$num';
 echo $varString;

 $varString = " el valor de la variable num es =  $num \n";
 echo $varString;

 $varString = "otra forma de incluir variables es {$num}";
 echo $varString;


//imprimir varias lineas
$stringMult = <<<'END'
Muchas lineas
mas lineas
otras lineas
END;

echo $stringMult;


//suma de strings
echo 'este es un '.'string';
echo 'multiples ', 'parametros ', 'en un echo';


//CONSTANTES
define("FOO", "algo");
echo FOO;

echo "este es el valor de la constante FOO = ".FOO;

?>