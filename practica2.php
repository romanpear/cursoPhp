<?php

//Algunas funciones de strings

//explode
$str = "Hola mundo, ya no esta nevando";
//explode(;, string)
print_r( explode(" ", $str));

//money_format
//money_format(format, number);
echo "$".money_format("%i", 1000)." \n";


//str_replace
$vocales = array("a","e","i","o","u");
//str_replace(search, replace, subject);
$soloVocales = str_replace($vocales, "", "Holis");
echo $soloVocales." \n";

//otro ejemplo
$frase = "You should eat fruits, vegetables and fiber every day";
$healthy = array("fruits", "vegetables","fiber");
$yumm = array("pizza","beer","ice cream");

$nuevaFrase = str_replace($healthy, $yumm, $frase);

echo $nuevaFrase." \n";



//hash crypt
$password = "admin123";
//crypt(str)
$hash = crypt($password,"564ew56d456wd1cws5w1");
echo $password." = ".$hash." \n";


//md5
$str = 'apple';
//md5(str);
if (md5($str) =='1f3870be274f6c49b3e31a0c6728957f') {
	echo 'bien encriptado';
	echo " \n";
}


//trim

$str = "   Prueba de string con espacios      ";
//trim(str);
echo trim($str);
echo " \n";

$str = "Hello Word";
$trimmed = trim($str, "HdWr");
echo $trimmed;
echo " \n";