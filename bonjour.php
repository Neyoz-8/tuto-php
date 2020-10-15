<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title>Mon super site</title>

</head>


<body>
	<p>
		<?php 

			if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) {
				$nbRepetitions = (int) $_GET['repeter'];

				if ($nbRepetitions<5) {

					echo '<p>le nombre de répétitions est trop petit </p>';
					
				}

				else if ($nbRepetitions<100) 
				{
					for ($repetition=0; $repetition < $nbRepetitions  ; $repetition++) { 

						echo '<p> Bonjour '.$_GET['nom'].' '. $_GET['prenom'].'</p>';
					}
					
				}
				else
				{
					echo '<p>le nombre de répétitions est trop grand </p>';
				}
			}

			else
			{
				echo ' Pas de nom ou prénom défini!';
			}


		 ?>
		


















	</p>


</body>

</html>