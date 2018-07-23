<?php
require 'rb.php';	
session_start();
R::setup( 'mysql:host=127.0.0.1;dbname=landing','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} 
	$data = $_POST;
	$user = R::dispense('clients');
	$user->name = $data['name'];
	$user->sname = $data['sname'];
	$user->phone = $data['phone'];
	R::store($user);
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Cormorant+Unicase|EB+Garamond|Lobster" rel="stylesheet">
	<title>Landing</title>
</head>
<body>
	
		<div id="container">
			<div id="progress">
				
			</div>
		</div>
	<div class="page-wrap">
		<div class="wrap header">
			<div style="opacity: 0.5; background-color: lightgray;">
			<video autoplay muted  id="myVideo" class="bg-image">
  				<source src="head.mp4" type="video/mp4">
			</video></div>
			<div class="title">
				<div class="hook">
				В 90% малого бизнеса <br>
ключевая проблема - нехватка клиентов
				</div>
				<div class="poloska">
					<hr>
				</div> 
				<div class="idea">Получайте до 500 новыз заказов 
каждый месяц - не затрачивая усилий. 
<br>Ваш продающий сайт с уникальным дизайном 
в топе Яндекс и Google через 7 дней</div>
			</div>
			<div class="button" onclick="$('#button').trigger('click');"  >ПОЛУЧИТЬ КЛИЕНТОВ</div>
			<button id="button" onclick="cont()" style="display: none;">button</button>
		</div>
		<div class="wrap" id="wrap_2">
			<div class="container">
				
			</div>
		</div>
		<div class="wrap" id="wrap_3">
			<div class="container">
				
			</div>
		</div>
		<div class="wrap" id="wrap_4">
			<div class="container">
				<div class="order">

					<form action="" method="POST">
						<div class="order-title">
						Заполните форму 
						<br>
						и получи сайт	
						</div>
						<input type="text" class="info" placeholder="Имя" name="name">
						<input type="text" class="info" placeholder="Фамилия" name="sname">
						<input type="text" class="info" placeholder="Номер телефона" name="phone">
						<button type="submit" class="info info-btn" name="button">Оставить заявку</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.scrollify.min.js"></script>	
	<script src="js/jquery.easing.min.js"></script>

	<script>
	
		var video = document.getElementById("myVideo");

	setTimeout( function(){
		video.pause();
		
	}, 2000);
// Get the button
var btn = document.getElementById('button');

// Pause and play the video, and change the button text
function cont() {

    video.play();
     $('#button').prop('disabled',true);
    setTimeout(function(){
    	
    	alert('Здесь откроется модальное окно или что нибудь');
    	
    },3000);
}

	


</script>
</body>
</html>