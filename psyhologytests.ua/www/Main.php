<?php require_once("Connection.php"); ?>
<!DOCTYPE html>
<!--Михальчук Василини, гр.ПІ-21-->
<html lang="UK-ua">
	<head>
		<meta charset="UTF-8">
		<title>Психологічні дослідження</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="Vasylyna Mykhalchuk"/>
		<meta name="description" content="Психологічні дослідження і тести"/>
		<meta name="keywords" content="психологія тести темперамент конфліктність самооцінка визначити" />
		<script src="js/jquery.min.js"></script>
		
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
		    <link rel="shortcut icon" href="images/ico1.png" />
			<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body  >
       
		<!-- Header -->
            <header id="header">
				<nav id="nav">
					
					<ul>	
						
						<li><a href="../Main.php#feedback">Повідомлення</a></li>
						<li><a href="www.psyhologytests.ua/Logout.php" class="button special">Вийти</a></li>
					</ul>
				</nav>
				<input class="6u 12u$(4)" type="text" value="" placeholder="Пошук психологічних досліджень..." style="color:white" onkeyup="showResult(this.value)">
				<div  class="6u 12u$(4)" id="livesearch"></div>
				
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2 id="quote">Почни з себе і досліджуй насамперед самого себе</h2>
				<p id="quoteauthor">Марк Аврелій</p>
				<ul class="actions">
					<li>
						<a href="Main.php#tests" class="button big">Обрати дослідження</a>
					</li>
				</ul>
			</section>

		<!-- Tests -->
			<section id="tests" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Пізнай себе!</h2>
						<p>Доступні психологічні тести:</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i id="bluebutton" onclick="window.location.href='Temperament.php'" class="icon big rounded color1" ></i>
								<h3>Дослідження темпераменту</h3>
								<p>Знання особливостей прояву різних темпераментів важливо для правильного життєвого та професійного самовизначення людини, а саме при виборі професії, комплектуванні виробничих колективів та управлінні ними, створенні команди однодумців, підборі подружніх пар із врахуванням закономірностей психологічної сумісності, розумінні проблем і конфліктів у колективі та сім'ї</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i id="greenbutton"onclick="window.location.href='Selfestimating.php'" class="icon big rounded color9"></i>
								<h3>Дослідження самооцінки</h3>
								<p>Характер людини проявляється відношенням не тільки до інших людей, але й до самої себе. Кожний із нас, свідомо чи несвідомо, часто порівнює себе з оточуючими і в результаті формує доволі стійке уявлення про свій інтелект, зовнішність, здоров'я, положення у суспільстві, тобто формує "набір самооцінок", від якого залежить стиль спілкування і поведінки,
								відношення до успіху й життєвих негараздів тощо.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i id="pinkbutton" onclick="window.location.href='Confictable.php'" class="icon big rounded color6"></i>
								<h3>Дослідження конфліктності</h3>
								<p>Конфлікти супроводжують наше життя і виникають у різних сферах життєдіяльності людини. Знання про сутність, структуру, класифікації, причини виникнення конфліктів та стратегії виходу із конфліктних ситуацій допоможуть управляти конфліктами: прогнозувати, попереджати або стимулювати, регулювати, розв'язувати внутрішньоособистісні та міжособистісні, сімейні конфлікти.</p>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Reviews -->
			<section id="reviews" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Відгуки користувачів</h2>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/photo_profile_markian.jpg" alt="Зображення профілю №1" />
								<h4>Маркіян</h4>
								<p><q>"Я щиро вражений, яким точним є результат!"</q></p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/photo_profile_julia.jpg" alt="" />
								<h4>Юлія</h4>
								<p><q>"Не можу передати словами, наскільки описують справжню мене. Рекомендую!"</q></p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/photo_profile_yurij.jpg" alt="" />
								<h4>Юрій</h4>
								<p><q>"Шкода, що я не знав цього раніше про себе. Раджу спробувати!"</q></p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="images/photo_profile_maria.jpg" alt="Зображення профілю Марія" />
								<h4>Марія</h4>
								<p><q>"Усе збігається! Скільки б не проходила тести"</q></p>
							</section>
						</div>
					</section>
				</div>
			</section>

		<!-- Feedback -->
			<section id="feedback" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Залиште своє повідомлення</h2>
						<p>Якщо у вас виникли труднощі чи запитання, заповніть, будь ласка, форму нижче. <br> Ваші відгуки, побажання та зауваження є важливими для нас!</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Ім'я" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" autofocus placeholder="Повідомлення" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Надіслати повідомлення" name="submit" id="btn" class="special big" type="submit"></li>
								</ul>
							</div>
							<ul id="posts"></ul>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			
        <script>
   $(document).ready(function() {
   
   
		window.quotes = [
			"\"Почни з себе і досліджуй насамперед самого себе\"",
			"\"Твої погляди стануть ясними лише, коли ти можеш поглянути у твоє серце. Хто дивиться назовні, мріє; хто дивиться всередину, прокидається\"",
			"\"Все, що дратує нас в інших людях, може привести нас до розуміння самих себе\"",
			"\"Єдина людина, з якою ви повинні порівнювати себе - це ви в минулому. І єдина людина, краще якої ви повинні бути - це ви зараз\"",
			"\"Визнання проблеми - половина успіху в її вирішенні\"",
			"\"Бути абсолютно чесним із самим собою - хороша вправа\""
		];
	
	
        window.authors = [
            "Марк Аврелій",
            "Карл Густав Юнг",
            "Карл Густав Юнг",
            "Зигмунд Фрейд",
            "Зигмунд Фрейд",
            "Зигмунд Фрейд"
            ];
			
			
			function putqoute() {
				var index=Math.round((Math.random() * (window.quotes.length - 1) + 0));
				$('#quote').html(quotes[index]);
				$('#quoteauthor').html(authors[index]);
			}
			setInterval(putqoute, 6000);
			
	   $("#btn").click(function(){
		   var post = $('#message').val();
		   $.post("search.php",
		   {
			   text: post
		   },
		   function(data,status){
			   $('#posts').html(data)
		   });
	   });
					
	  
});


			$('#greenbutton').mouseover(function() {
				this.className="icon big rounded color9 fa-arrow-circle-right";
			});
			$('#greenbutton').mouseout(function() {
				this.className="icon big rounded color9";
			});
		
			$('#pinkbutton').mouseover(function() {
				this.className="icon big rounded color6 fa-arrow-circle-right";
			});
			$('#pinkbutton').mouseout(function() {
				this.className="icon big rounded color6";
			});
			
			
			$('#bluebutton').mouseover(function() {
				this.className="icon big rounded color1 fa-arrow-circle-right";
			});
			$('#bluebutton').mouseout(function() {
				this.className="icon big rounded color1";
			});
	
	
			function showResult(str) {
				debugger;
				if (str.length==0) { 
					document.getElementById("livesearch").innerHTML="";
					document.getElementById("livesearch").style.border="0px";
					return;
				}
				if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				} else {  // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function() {
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
						document.getElementById("livesearch").style.border="1px solid #A5ACB2";
						document.getElementById("livesearch").style.color="white";
					}
				}
				xmlhttp.open("GET","livesearch.php?q="+str,true);
				xmlhttp.send();
			}
	
	<?php
			
			if(isset($_POST["submit"])){
				
				
				if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
					$name=$_POST['name'];
					$email=$_POST['email'];
					$message=$_POST['message'];			
			
					$query=mysql_query("SELECT * FROM messages WHERE email='".$email."'");
					$numrows=mysql_num_rows($query);
					
					if($numrows==0)
					{
						$sql="INSERT INTO messages
						(name, email, message) 
						VALUES('$name','$email', '$message')";
						
						$result=mysql_query($sql);
						
						
						if($result){
							header('Location: ../Main.html#tests');
							print '<script type="text/javascript">'; 
							print 'alert("Message Sent!")'; 
							print '</script>'; 
							
							
						} else {
							print '<script type="text/javascript">'; 
							print 'alert("Failed to sent message!")'; 
							print '</script>'; 
							
						}
						
					} else {
						print '<script type="text/javascript">'; 
						print 'alert("That username already sent message! Sorry, but you can post only one feedback")'; 
						print '</script>'; 
						
					}
					
				} else {
					print '<script type="text/javascript">'; 
					print 'alert("All fields are required!")'; 
					print '</script>'; 
				}
			}
	?>
		
    </script>
	</body>
</html>