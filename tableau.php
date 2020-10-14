<?php



$prenoms = array('mathieu','marie','robert' );


echo $prenoms[2];
?>
<br>

<?php

echo print_r($prenoms);

?>
<br>

<?php  

$personne = array('nom'=> 'nebra', 'prenoms' => 'mathieu', 'age' => '18');

print_r($personne);

foreach ($personne as $libelle => $detail ) {
	echo '<p>'.$libelle.'vaut'.$detail.'</p>';
}
?>