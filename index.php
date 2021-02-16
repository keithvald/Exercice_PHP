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
		function ReturnTrue($first,$second){
			if($first > $second){
				return true;
			}
		}
		$result = ReturnTrue(8,3);
		echo "$result";
	?>

<!--exercice suivant-->
	<h2> exercice 2</h2>
	<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine</p>
	<?php
		function ReturnString($sentence){
			return $sentence;
		}

		$blop = ReturnString("Salut");
		echo "$blop";
	?>

<!--exercice suivant-->
	<h2> exercice 3</h2>
	<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>
	<?php
		function ReturnStrings($word1, $word2){
			$sentences = "$word1" . " $word2";
			return $sentences;
		}

		$blop = ReturnStrings("Salut", "toi");
		echo "$blop";
	?>

<!--exercice suivant-->
	<h2> exercice 4</h2>
	<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br/>
		=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br/>
		=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br/>
		=> Les deux nombres sont identiques si les deux nombres sont égaux
	</p>
	<?php
		function ReturnNumbers($number1, $number2){

			if ($number1 > $number2) {
				$result = "Le premier nombre est plus grand : $number1 > $number2.";
				return $result;
			} elseif($number1 < $number2) {
				$result = "Le premier nombre est plus petit : $number1 <  $number2.";
				return $result;
 			} elseif($number1 == $number2) {
 				$result = "Les deux nombres sont identiques : $number1 == $number2.";
 				return $result;
 			} else {
 				$result = "Mais que fais tu ?";
 				return $result;
 			}

		}
 			$blop = ReturnNumbers(2, 2);
			echo "$blop";
	?>

<!--exercice suivant-->
	<h2> exercice 5</h2>
	<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit a concaténation de ces deux paramètres.</p>
	<?php
		function ReturnBoth($number, $word){
			$sentences = "$number" . " $word";
			return $sentences;
		}

		$blop = ReturnStrings("17", "ans");
		echo "$blop";
	?>
<!--exercice suivant-->
	<h2> exercice 6</h2>
	<p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>
	<?php
		function ReturnPerson($nom, $prenom, $age){
			$sentences = "Bonjour $nom $prenom, tu as $age ans.";
			return $sentences;
		}

		$blop = ReturnPerson("Fabre", "Anissa", 20);
		echo "$blop";
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
		function ReturnType($age, $genre){

			if ($age > 18 && $genre == "homme") {

				$result = "Vous êtes un homme et vous êtes majeur.";
				return $result;

			} elseif($age < 18 && $genre == "homme") {

				$result = "Vous êtes un homme et vous êtes mineur.";
				return $result;

 			} elseif($age > 18 && $genre == "femme") {

 				$result = "Vous êtes une femme et vous êtes majeur.";
 				return $result;

 			} elseif($age < 18 && $genre == "femme") {

 				$result = "Vous êtes une femme et vous êtes mineur.";
 				return $result;

 			} else {
 				$result = "Mais que fais tu ?";
 				return $result;
 			}

		}
		$blop = ReturnType(20, "femme");
		echo "$blop";
	?>
<!--exercice suivant-->
	<h2> exercice 8</h2>
	<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.</p>
	<?php

		$number1 = 10;
		$number2 = 5;
		$number3 = 20;	
		function ReturnSum($number1, $number2, $number3){

			$result = $number1+$number2+$number3;
 			return $result;

		}
 			$blop = ReturnSum(3, 3, 3);
			echo "$blop";
	?>

<!--LES TABLEAUX-->

	<h1> Les Tableaux</h1>
	<h2> exercice 1</h2>
	<p>Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année.</p>
	<?php
		$mois = array (
			'JANVIER',
			'FÉVRIER',
			'MARS',
			'AVRIL',
			'MAI',
			'JUIN',
			'JUILLET',
			'AOUT',
			'SEPTEMBRE',
			'OCTOBRE',
			'NOVEMBRE',
			'DECEMBRE');
		var_dump($mois);
	?>
<!--exercice suivant-->
	<h2> exercice 2</h2>
	<p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
	<?php
		echo $mois[2];
	?>
<!--exercice suivant-->
	<h2> exercice 3</h2>
	<p>Avec le tableau de l'exercice 1 , afficher la valeur de l'index 5.</p>
	<?php
		echo $mois[5];
	?>
<!--exercice suivant-->
	<h2> exercice 4</h2>
	<p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
	<?php
		$replace = substr_replace('AOUT','AOÛT', $mois[8]);
		echo "$replace";
	?>
<!--exercice suivant-->
	<h2> exercice 5</h2>
	<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
	<?php
				$departement = array (
				    '02' => 'Aisne',
				    '59' => 'Nord',
				    '60' => 'Oise',
				    '62' => 'Pas-de-Calais',
				    '80' => 'Somme');
				var_dump($departement);
	?>
<!--exercice suivant-->
	<h2> exercice 6</h2>
	<p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
	<?php
		echo $departement['59'];
	?>
<!--exercice suivant-->
	<h2> exercice 7</h2>
	<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
	<?php
		$departement['51'] = 'Marne';
	?>
<!--exercice suivant-->
	<h2> exercice 8</h2>
	<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
	<?php
		foreach($mois as $element)
		{
		    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
		}
	?>
<!--exercice suivant-->
	<h2> exercice 9</h2>
	<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
	<?php
		foreach($departement as $element)
		{
		    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
		}
	?>
<!--exercice suivant-->
	<h2> exercice 10</h2>
	<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.<br/>
	Cela pourra être, par exemple, de la forme :<br/>
	"Le département" + nom_departement + "a le numéro" + num_departement</p>
	<?php
		foreach($departement as $cle => $element)
		{
		    echo "Le département $element a le numero $cle <br/>"; // affichera $prenoms[0], $prenoms[1] etc.
		}
	?>
</body>

</html>