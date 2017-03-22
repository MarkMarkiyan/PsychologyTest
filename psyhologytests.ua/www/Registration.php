<?php require_once("Connection.php"); ?>
<?php include("Header.php"); ?>
	<body class="landing">

		<!-- Header -->
		<header id="header">
			
			<h1>Психологічні дослідження: Реєстрація</h1>
			
		</header>
		
		<!--Registration-->
		<section id="three" class="wrapper style3 special">
			<div class="container">
				<header class="major">
					<h2>Реєстрація</h2>
					
				</header>
			</div>
			<div class="container 50%" id="login">
				<form name="registerform" id="registerform" action="Registration.php" method="post">
					<div class="row uniform">
						
						<div class="12u$">
							<input name="name" id="name" value="" placeholder="Name" type="text">
						</div>	<br>
						<div class="12u$">
							<input name="email" id="email" value="" placeholder="Email" type="email">
						</div>	<br>
						<div class="12u$">
							<input name="password" id="password" value="" placeholder="Password" type="password">
						</div>
						
						<div class="12u$">
							<ul class="actions">
								<li><input id="register" name="submit" value="Зареєструватись" class="special big" type="submit"></li>
								
							</ul>
						</div>
					</div>
				</form>
			</div>
		</section>

	<?php include("Footer.php"); ?>
		<?php
			
			if(isset($_POST["submit"])){
				
				
				if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
					$name=$_POST['name'];
					$email=$_POST['email'];
					$password=$_POST['password'];
					
					
					
					$query=mysql_query("SELECT * FROM users WHERE email='".$email."'");
					$numrows=mysql_num_rows($query);
					
					if($numrows==0)
					{
						$sql="INSERT INTO users
						(name, email, password) 
						VALUES('$name','$email', '$password')";
						
						$result=mysql_query($sql);
						
						
						if($result){
							header('Location: ../Main.html#tests');
							print '<script type="text/javascript">'; 
							print 'alert("Account Successfully Created")'; 
							print '</script>'; 
							
							
						} else {
							print '<script type="text/javascript">'; 
							print 'alert("Failed to insert data information!")'; 
							print '</script>'; 
							
						}
						
					} else {
						print '<script type="text/javascript">'; 
						print 'alert("That username already exists! Please try another one!")'; 
						print '</script>'; 
						
					}
					
				} else {
					print '<script type="text/javascript">'; 
					print 'alert("All fields are required!")'; 
					print '</script>'; 
					$message = "All fields are required!";
				}
			}
		   ?>
	</body>
</html>