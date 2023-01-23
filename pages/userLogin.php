<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>USER|LOGIN</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="../css/userLogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form" style="width: 900px; margin-top: 100px;">
	<div class="left" style="width: 50%;">
		<div class="overlay">
		<h1 style="font-size: 70px;">Hello World.</h1>
		<p class="log" >Let's help you Login</p>
		<span>
			<p>Find Us On our Social Media Platform</p>
			<a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjQ2I6Kqeb7AhV-_rsIHeDaBFEQFnoECBcQAQ&url=https%3A%2F%2Fwww.facebook.com%2Fvalleyviewuniversityghana%2F&usg=AOvVaw1oBEK2jnZhUgH-BlODRTYq">
				<i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjv9svvqOb7AhUQ_bsIHQDdC7AQFnoECBYQAQ&url=https%3A%2F%2Ftwitter.com%2Fvvuniversity%3Flang%3Den&usg=AOvVaw11tfh1qqDtqmqXhEFh1YqC">
				<i class="fa fa-twitter" aria-hidden="true"></i> Find us on Twitter</a>
		</span>
		</div>
	</div>
		<form action="../php/login_auth.php" method="POST" class="right" style="width: 50%">
		<h5 style="font-size: 35px;">Login</h5>
		<div class="inputs">
			<input type="text" placeholder="ID" required name="student-id">
			<br>
			<input type="password" placeholder="Password" required name="student-pass">
		</div>
			<a href="../pages/userBook.html">
			<input type="submit" value="Login">
			</a>
		</form>
</div>
<!-- partial -->
</body>
</html>
