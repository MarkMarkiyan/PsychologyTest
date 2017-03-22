<?php
session_start();
?>

<?php require_once("Connection.php"); ?>
<?php include("Header.php"); ?>


	<body class="landing">
         
		<!-- Header -->
		<header id="header">
			
			<h1>Психологічні дослідження: Увійти</h1>
		</header>

		
		<!-- Log In -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
					
					<h2>Психологічні дослідження</h2>
					<?php if (!empty($message)) {echo "<p>" . "". $message . "</p>";} ?>
					</header>
				</div>
				<div class="container 50%" id="login">
					<form action="Login.php" method="post">
						<div class="row uniform">
							
							
							<div class="12u$">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>	<br>
							<div class="12u$">
								<input name="password" id="password" value="" placeholder="Password" type="password">
							</div>
							
							<div class="12u$">
								<ul class="actions">
									<li><input name="submit" value="Увійти" class="button alt" type="submit"></li>
									<li><a href="../Registration.php" class="button alt icon fa-pencil-square">Зареєструватись</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

		<?php include("Footer.php"); ?>
		<?php 
			define('DB_HOST', 'localhost');
			define('DB_NAME', 'psyhologybd');
			define('DB_USER','root');
			define('DB_PASSWORD','');
			
			$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); 
			
			$db=mysqli_select_db($con,DB_NAME)
			or die("Failed to connect to MySQL: " . mysqli_error());
			
			/*$ID = $_POST['user'];
			$Password = $_POST['pass'];*/
			
			function SignIn() {
				
				global $con;
				
				session_start(); //starting the session for user profile page
				
				if(!empty($_POST['email'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
				{
					$query = mysqli_query($con, "SELECT * FROM users where email = '$_POST[email]' AND password = '$_POST[password]'") 
					or die(mysqli_error()); 
					$row = mysqli_fetch_array($query);
					
					if(!empty($row['email']) AND !empty($row['password'])) 
					{
						$_SESSION['email'] = $row['password'];
						
						print '<script type="text/javascript">'; 
                        print 'alert("Successful log in");'; 
						print 'window.open("http://www.psyhologytests.ua/Main.php");';						
						print '</script>';
					}
					else { 
                        print '<script type="text/javascript">'; 
                        print 'alert("The email address or the password are incorrect!")'; 
						print '</script>';   }
				}
			}
			
			if(isset($_POST['submit'])) 
			{ 
				$dom = new DOMDocument();
				$a = $dom->getElementById('username');
				$a->val='';
				SignIn(); 
			}
		?>
	</body>
	
	
</html>