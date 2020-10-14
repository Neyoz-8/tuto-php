<?php 

$phrase = 'bonjour je suis une phrase ';

$nombreDeChar = str_shuffle($phrase);

echo $nombreDeChar;

echo date('m');



 ?>

<?php 

function direBonjour ($nom) {

	echo 'Bonjour '. $nom;
}

direBonjour('marie');


 ?>