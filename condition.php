<?php 

$age=14;
if ($age<12) {
	echo "salut gamin";
}
elseif ($age==14) {
	echo "tu as 14 ans";
}
else {
	echo "bonjour grand ";
}
?>
<br>
<?php
$adulte=true;

if ($adulte) {
	echo "tu es adulte";
}
else {
	echo "tu es mineur";
}

?>
<br>
<?php
$age=10
switch ($age) {
	case 4:
		echo "tu as 4 ans";
		break;
	case 10:
		echo "tu as 10 ans";
		break;
	
}


?>