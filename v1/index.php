<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<link rel="shortcut icon" href="img/logo.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="VKohut">
	<meta name="description" content="Czeburek to dobra cena, pyszne jedzenie i wielkia porcja">
	<meta name="keywords" content="czeburek, fastfood, smacznie, tanio, jedzenie, z Ukrainy, szybka dostawa, Kraków, Lipowa 7, z mięsem, bez mięsa, jedzenie wegetariańskie, jedzenie na dowóz, uber eats, pyszne pl, dostawa pod dżwi">
	<title>Czeburek | Czeburek ul. Lipowa 7 Kraków - tel. 881 775 991</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- <link href='http://fonts.googleapis.com/css?family=Ribeye&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Jolly+Lodger&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
	<link href='http://fonts.googleapis.com/css?family=Joti+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<?php require "blocks/header.html" ?>

<!-- 
DOROBYTY:
1.wstawyty prawylni sylky na soc sieti i na czaty soc sietiej
2. poprawyty bah w onas knopka ramka synia
3. pytatys pro kuky
4. perewiryty sylky czy pracujut
5. dorobyty php fajly
6. zaminyty se na html i dodaty formu ajax


 -->
<!-- add PROMO 3-5photo -->
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <picture>
    	<img class="img-fluid" src="img/1.jpg" alt="...">
    </picture>
    </div>
    <div class="carousel-item">
    <picture>
      <img class="img-fluid" src="img/2.jpg" alt="...">
    </picture>
    </div>
    <div class="carousel-item">
    <picture>
       <img class="img-fluid" src="img/3.jpg" alt="...">
    </picture>
    </div>
  </div>
</div>

	<!--Add O NAS -->
	<?php require "blocks/body_onas.html" ?>
	
	<!--Add MENU -->
	<?php require "blocks/body_menu.html" ?>

	<!-- add GALERIA -->
	<?php require "blocks/body_galeria.html" ?>

	<!-- add KONTAKT -->
	<?php require "blocks/body_kontakt.html" ?>

	<?php require "blocks/footer.html" ?>
</body>
</html>