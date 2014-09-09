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
	<?php echo "Hello, world!"; ?>
	<br>
	<?php echo 'Lets dance!'; ?>

	<?php
	    $muutuja1 = "24";
	    $muutuja2 = "26";
	    echo "<br>";
	   	echo ($muutuja1 . $muutuja2);
	?>

	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	<?php
	    $student1 = "Fränk";
	    $student2 = "Syret";
	    $student3 = "Triinu";
	    $student4 = "Silja";
	    $student5 = "Anneli";
	?>
	<ul>
	<?php
	echo
	 		"<li>$student1</li>;
	 		<li>$student2</li>;
	 		<li>$student3</li>;
	 		<li>$student4</li>;
	 		<li>$student5</li>;"
	?>
	</ul>
	 <?php
	    $firstName = "Fränk";
	    $lastName = "Ainla";
	    $fullName = ("$firstName " . $lastName);

	    echo $fullName;
	?>
</body>
</html>
	