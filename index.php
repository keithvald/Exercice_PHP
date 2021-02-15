<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>EXERCICES PHP</title>
</head>

<body>
<!--LES VARIABLES-->

	<h1> Les Variables</h1>
	<h2> exercice 1</h2>
	<p>Créer une variable : «nom» et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
	<?php 
		$nom="éphèbe"; 
		echo "$nom";
	?>

<!--exercice suivant-->
	<h2> exercice 2</h2>
	<p>Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.</p>
	<?php 
		$nom = "Dragnir"; 
		$prenom = "Bacchus";
		$age = 17;
		echo "$prenom $nom $age";
	?>

<!--exercice suivant-->
	<h2> exercice 3</h2>
	<p>Créer une variable «km» . L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3.
	Afficher son contenu. Changer sa valeur par 125. Afficher son contenu.</p>
	<?php 
		$km = 1; 
		echo "$km <br/>";
		$km = 3;
		echo "$km <br/>";
		$km = 125;
		echo "$km";
	?>

<!--exercice suivant-->
	<h2> exercice 4</h2>
	<p>Créer une variable de type string, une variable de type int, une variable de type float,
	une variable de type booléan et les initialiser avec une valeur de votre choix.
	Les Afficher</p>
	<?php 
		$string = "Bonjour";
		$int = 17;
		$float = 6.99;
		$boolean = true;
		echo "$string $int $boolean $float";
	?>

<!--exercice suivant-->
	<h2> exercice 5</h2>
	<p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
	Donner une valeur à cette variable et l'Afficher</p>
	<?php 
		$int = 0; 
		echo "La variable avec rien provoque une erreur. <br/>";
		$int = 5;
		echo "$int";
	?>

<!--exercice suivant-->
	<h2> exercice 6</h2>
	<p>Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
	Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>
	<?php 
		$nom="Beast"; 
		echo "Bonjour $nom, comment vas tu ?";
	?>

<!--exercice suivant-->
	<h2> exercice 7</h2>
	<p>Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
	Attention age est de type entier. Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans"</p>
	<?php 
		$nom = "Dragnir"; 
		$prenom = "Bacchus";
		$age = 17;
		echo "Bonjour $prenom $nom, tu as $age ans";
	?>

<!--exercice suivant-->
	<h2> exercice 8</h2>
	<p>Créer 3 variables.
	Dans la première mettre l'adition qui donne le résultat 7.
	Dans la deuxième mettre la multiplication qui donne le résultat 100.
	Dans la troisième mettre la division qui donne le résultat 5.
	Afficher le contenu des variables.</p>
	<?php 
		$first = 5+2;
		$second = 10*10;
		$third = 10/2;
		echo "La première opération donne $first, la seconde donne $second et la dernière donne $third.";
	?>

<!--LES BOUCLES-->

	<h1> Les Boucles</h1>
	<h2> exercice 1</h2>
	<p>Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10 :<br/>
		=> l'afficher => incrémenter de 1</p>
	<?php 
		for($initial = 0; $initial <= 10; $initial++)
		{
			echo "$initial<br/>";
		}
	?>

<!--exercice suivant-->
	<h2> exercice 2</h2>
	<p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 :<br/>
		=> multiplier la première variable avec la deuxième<br/>
		=> afficher le résultat<br/>
		=> incrémenter la première variable<br/>
	</p>
	<?php 
		$initial = 0;
		$second = 5;
		for ($initial=0; $initial < 20 ; $initial++) 
		{ 
			 $result = $initial * $second;
             echo "$result <br/>";
		}
		
	?>

<!--exercice suivant-->
	<h2> exercice 3</h2>
	<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas inférieur ou égale à 10 :<br/>
		=> soustraire la première variable avec la deuxième<br/>
		=> afficher le résultat<br/>
		=> décrémenter la première variable<br/>
	</p>
	<?php 
		$initial = 100;
		$second = 5;
		while ($initial >= 10)
		{
			$result = $initial-$second;
			echo "$result<br/>";
			$initial--;
		}
	?>

<!--exercice suivant-->
	<h2> exercice 4</h2>
	<p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :<br/>
	=> l'afficher<br/>
	=> l'incrementer de la moitié de sa valeur<br/>
	</p>
	<?php 
		$initial = 1;
		while ($initial <= 10) 
		{
			echo "$initial <br/>";
			$moitie = $initial / 2;
        	$initial += $moitie;
		}
	?>

<!--exercice suivant-->
	<h2> exercice 5</h2>
	<p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque...</p>
	<?php 
		$initial = 1;
		while ($initial <= 15) 
		{
			echo "$initial On y est presque... <br/>";
        	$initial ++;
		}
	?>
	?>

<!--exercice suivant-->
	<h2> exercice 6</h2>
	<p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon...</p>
	<?php 
		$initial = 20;
		while ($initial >= 0) 
		{
			echo "$initial C'est presque bon... <br/>";
        	$initial --;
		}
	?>

<!--exercice suivant-->
	<h2> exercice 7</h2>
	<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout...</p>
	<?php 
		$initial = 1;
		while ($initial <= 100) 
		{
			echo "$initial On tient le bon bout... <br/>";
			$pas = 15;
        	$initial += $pas;
		}
	?>

<!--exercice suivant-->
	<h2> exercice 8</h2>
	<p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin ! ! !</p>
	<?php 
		$initial = 200;
		while ($initial >= 0) 
		{
			echo "$initial Enfin ! ! ! <br/>";
			$pas = 12;
        	$initial -= $pas;
		}
	?>

<!--LES FONCTIONS-->

	<h1> Les Fonctions</h1>
	<h2> exercice 1</h2>
	<p> Faire une fonction qui retourne true.</p>
	<?php
		function RetourneTrue($first)
	
	?>

<!--exercice suivant-->
	<h2> exercice 2</h2>
	<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 3</h2>
	<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 4</h2>
	<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br/>
		=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br/>
		=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br/>
		=> Les deux nombres sont identiques si les deux nombres sont égaux
	</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 5</h2>
	<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit a concaténation de ces deux paramètres.</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 6</h2>
	<p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 7</h2>
	<p>Faire une fonction qui prend deux paramètres : age et genre.<br/>
		Le paramètre genre peut prendre comme valeur Homme ou Femme.<br/>
		La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :<br/>
		=> Vous êtes un homme et vous êtes majeur<br/>
		=> Vous êtes un homme et vous êtes mineur<br/>
		=> Vous êtes une femme et vous êtes majeur<br/>
		=> Vous êtes une femme et vous êtes mineur
	</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 8</h2>
	<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.</p>
	<?php

	?>
<!--LES TABLEAUX-->

	<h1> Les Tableaux</h1>
	<h2> exercice 1</h2>
	<p> Faire une fonction qui retourne true.</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 2</h2>
	<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 3</h2>
	<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 4</h2>
	<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br/>
		=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br/>
		=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br/>
		=> Les deux nombres sont identiques si les deux nombres sont égaux
	</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 5</h2>
	<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit a concaténation de ces deux paramètres.</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 6</h2>
	<p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 7</h2>
	<p>Faire une fonction qui prend deux paramètres : age et genre.<br/>
		Le paramètre genre peut prendre comme valeur Homme ou Femme.<br/>
		La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :<br/>
		=> Vous êtes un homme et vous êtes majeur<br/>
		=> Vous êtes un homme et vous êtes mineur<br/>
		=> Vous êtes une femme et vous êtes majeur<br/>
		=> Vous êtes une femme et vous êtes mineur
	</p>
	<?php

	?>
<!--exercice suivant-->
	<h2> exercice 8</h2>
	<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.</p>
	<?php

	?>
</body>

</html>