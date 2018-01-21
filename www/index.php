<?php
if (isset($_GET["section"])) { 
   $section = $_GET["section"]; 
} else { 
   $section = ""; 
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ferienwohnung Treu</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ferienwohnung Pappenheim - Die schöne, abgeschlossene und harmonisch eingerichtete Ferienwohnung im Erdgeschoß liegt
					  am Waldrand von Pappenheim. Sie besteht aus Wohnküche, Wohnzimmer mit direktem Zugang zu überdachter Terrasse 
					  und Garten, Schlafzimmer, Dusche und WC">
    <meta name="keywords" content="Naturpark Altmühltal, Seenland"/>
    <meta name="author" content="Ferienwohnung Treu">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Navigation -->
    	<?php include("menu.php")?>	

	<!-- Introduction -->
	<div class="intro">
		<div class="container">
			<!--
			<div class="units-row">
			    <div class="unit-10">
			    	<img class="img-intro" src="img/avatar.png" alt="">
			    </div>
			    <div class="unit-90">
			    	<p class="p-intro">Hello, I’m Saturn. I’m proud to be a part of milky way.</p>
			    </div>
			</div>
			-->
		</div>
	</div>
	
	<!-- Content -->
    	<?php include("sites.php")?>	

	<!--
	<footer>
		<div class="container">
			<div class="units-row">
			    <div class="unit-50">
			    	<button class="btn btn-black"><i class="fa fa-arrow-left"></i> PREVIOUS</button>
			    </div>
			</div>
		</div>
	</footer>
	-->

	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
    	<script src="js/kube.min.js"></script>
</body>
</html>
