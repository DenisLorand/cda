<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>99 bolées de cidre</title>
		<meta name="description" content="99 bolées de cidre sur le mur">
		<meta name="robots" content="index,follow,all" />
	<!--Feuilles de styles-->
	 	<link rel="stylesheet" href="style.css">
	<!--Google Fonts Open Sans-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	</head>

	<body>

		<h1>TEST CDA : 99 bolées de cidre</h1>
	
	<?php
	
	//On initialise la variable $ qui représente les 99 bolées de cidre à boire.
	$bolees = 99; 
	
	/*La boucle while ("tant que") démarre à 99 bolées et continue tant que le nombre de bolées est strictement supérieur à 2,
	après avoir, pour chaque cas, retiré 1 bolée par post-décrémentation(--) soit n-1 bolée, à la ligne suivante. */
	while($bolees > 2)
	{	
	/*la balise inline <br/> dans le paragraphe permet le saut de ligne.
	La balise block <p></p> permet de séparer le paragraphe suivant en créant un espace.*/
		echo '<p>' .$bolees. ' bolées de cidre sur le mur, '  .$bolees--.' bolées sans alcool.<br/>
	     Bois en un et  suivant ! ' .$bolees. ' bolées de cidre sur le mur.</p>';
	}
	
	//La condition if représente içi le cas où il ne reste que 2 bolées à boire, puis 1 seule après décrémentation.
	if($bolees = 2)
	{
	//Ne restant plus qu'une seule bolée à boire, on retire le "s" final dans le texte à afficher.
		echo '<p>' .$bolees. ' bolées de cidre sur le mur, '  .$bolees--.' bolées sans alcool.<br/>
	     Bois en un et au suivant ! ' .$bolees. ' bolée de cidre sur le mur.</p>';
	}
		 
	//La condtion if içi représente le cas où il ne reste qu'une seule bolée à boire, puis plus aucune après décrémentation.
	if($bolees = 1)
	{
	//Soit 0 bolée, qu'on écrit "Plus de" dans le texte...puis on va en acheter au supermarché
		echo '<p>' .$bolees. ' bolée de cidre sur le mur, '  .$bolees.' bolée sans alcool.<br/>
	     Bois en un et au suivant ! Plus de bolées de cidre sur le mur.</p>';
		
		echo '<p>Plus de bolées de cidre sur le mur, plus de bolées sans alcool.<br/>
         Vas au supermarché pour en acheter, 99 bolées de cidre sur le mur.</p>';
	}
	
	?>
	
	</body>
	
</html>

