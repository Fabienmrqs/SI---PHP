<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" href="img/icon.png">

	<title>KHAFQ.issou</title>
</head>
<body>
	<header class="header">
			<img src="img/title.svg" class="header__title">
			<p class="header__description">Votre plateforme multifonction</p>
			<div class="header__box">
			<a href="index.php" class="h__box__cross"></a>
		</div>
	</header>
	<section class="post">
		<nav class="post__tabs">
			<a href="#signin" class="p__tabs__link signin is-active">Se connecter</a>
			<a href="#signup" class="p__tabs__link signup">S'inscrire</a>
			
		</nav>
		<form action="index.php" method="post" class="post__form signin is-active" id="signin">
			<h2>Indentifiant: </h2>
		    <input type="text" name="username" placeholder="Ex: Bunkermaster" class="p__form__input__id"></br>
		    <h2>Mot de passe: </h2>
		    <input type="password" name="password" placeholder="Ex: PHP4life" class="p__form__input__pw"></br>
		    <h2>Confirmer votre mot de passe: </h2>
		    <input type="password" name="repeatpassword" class="p__form__input__pw"></br>
		    <input type="submit" value="S'inscrire" name="submit" class="p__form__submit">
		</form>
		<form action="index.php" method="post" class="post__form signup" id="signup">
			<h2>Indentifiant: </h2>
		    <input type="text" name="username" placeholder="Ex: Bunkermaster" class="p__form__input__id"></br>
		    <h2>Adresse mail: </h2>
		    <input type="email" name="mail" placeholder="Ex: maclinux@pc.com" class="p__form__input__mail"></br>

		    <h2>Mot de passe: </h2>
		    <input type="password" name="password" placeholder="Ex: PHP4life" class="p__form__input__pw"></br>
		    <h2>Confirmer votre mot de passe: </h2>
		    <input type="password" name="repeatpassword" class="p__form__input__pw"></br>
		    <input type="submit" value="S'inscrire" name="submit" class="p__form__submit">
		</form>
		
		
	</section>
	<footer class="footer">
		<p class="footer__text">© Multiforme 2018 </p>
		<p class="footer__text">Created by <a href="https://github.com/ShAd0wInK" class="f__text__link">Alexandre DELALOY</a>, <a href="https://github.com/Quentin-Aime" class="f__text__link">Quentin AIME</a>, <a href="https://github.com/Kasdabs" class="f__text__link">Kassandra AMBROISE</a>, <a href="https://github.com/hichemamb" class="f__text__link">Hichem AMAR BENSABER</a> et <a href="https://github.com/Fabienmrqs" class="f__text__link">Fabien MARQUES</a></p>
		<img src="img/logo.svg" alt="logo footer" class="footer__img">
	</footer>
	<div class="h__box__img" style="display: none"></div>
</body>
<script src="js/script.js"></script>
</html>