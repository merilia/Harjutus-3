<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP põhitõed II</title>
</head>
<body>
	<h1>Muutujad</h1>
	<?php
	    $suhkur = 100;

	    echo $suhkur;
	    echo "<br>";
	?>
	<?php
	    $suhkur = 50;
	    echo $suhkur;
	?>

	<h1>Stringid</h1>
	<?php echo "Hello, world!"; ?><br>
	<?php echo 'Lets dance!'; ?>

	<?php
	    $muutuja1 = "24";
	    $muutuja2 = "26";
	    echo "<br>";
	   	echo ($muutuja1 . $muutuja2);
	?>

	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	<?php
	    $student1 = "Fr2nk";
	    $student2 = "Syret";
	    $student3 = "Triinu";
	    $student4 = "Silja";
	    $student5 = "Anneli";
	?>
	<ul>
	<?php
	echo
	 		"<li>$student1</li>
	 		<li>$student2</li>
	 		<li>$student3</li>
	 		<li>$student4</li>
	 		<li>$student5</li>"
	?>
	</ul>
	 <?php
	    $firstName = "Fr2nk";
	    $lastName = "Ainla";
	    $fullName = ("$firstName " . $lastName);

	    echo $fullName;
	    echo "<br>";
	    $test = "Testin";
		echo "$test kas interpolatsioon töötab";

		$age = "15";
		echo "<br>";
		echo "Ma olen {$age}-e aastane";

	//strtolower tähendab pikemalt "StringToLower" ning selle funktsiooni eesmärgiks on muuta stringi tähemärgid väikesteks tähemärkideks
		$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$lower = strtolower($source);
		echo "<p>{$lower}</p>";
	?>
	<!--trim funktsioon eemaldab stringi algusest ja lõpust tühikud-->
	<?php echo "A" . trim(" B C D E") . "F"; ?>

	<h2>Täisarvud</h2>
	<?php
		$arv1 = 3;
		$arv2 = 4;
		echo ($arv1 * $arv2) * 2;
	?><br>
	<?php echo abs(-300) ?><br>
	<?php
	    // Viis ruudus:
	    echo pow(5, 2);
	    echo "<br>";
	    // Seitse kuubis:
	    echo pow(7, 3);
		echo "<br>";
	    // Kolm astmel seitse:
	    echo pow(3, 7);
	?><br>
	<?php
	    // Ruutjuur 25-st:
	    echo sqrt(25);
	?><br>
	<?php
	    // Suvaline number
	    echo rand();

	    // Suvaline number vahemikus 5 - 130:
	    echo rand(5, 130);
	?>
	<?php
   	    $sample_nr = 45;
	?><br>
	<?php
	 	$sample_nr = 45;
	 	$sample_nr = $sample_nr + 8;
	 	echo $sample_nr;
	?><br>
	<?php
	    $sample_nr2 = 45;
	    $sample_nr2 += 8;
	    echo $sample_nr2;
	?><br>
	<?php
	    $sample_nr2 = 45;
	    $sample_nr2 -= 5;
	    echo $sample_nr2;
	?><br>
	<?php
	    $sample_nr3 = 45;
	    $sample_nr3 *= 5;
	    echo $sample_nr3;
	    echo "<br>";
	    $sample_nr2 = 45;
	    $sample_nr2 /= 5;
	    echo $sample_nr2;
	?><br>
	<?php
    	echo 5 . " teksapüksid";
	?><br>
	<?php
    	echo 5 + " teksapüksid";
	?><br>
	<?php
    	echo 5 + "5";
	?><br>
	<?php
	    echo 5 + "7 teksapüksi";
	?>
</body>
</html>
	