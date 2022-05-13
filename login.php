<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="login.css">

	<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- fontawsome link -->
	<script src="https://kit.fontawesome.com/af9dee3d12.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="form-area">
		<h3>Login to recipe</h3>
		<form>
			
			<p>Email</p>
			<input type="text" name="" id="email" 
			placeholder="Enter your Email" value="" required>
			

			<p class="mt-3">Password</p>
			<input type="password" name="" id="password" placeholder="Enter your Password" value="" required>
			
			<input type="submit" name="" id="login" value="Login" class="mt-4">
			<div class="mb-3">
				<a href="#" class="loginn">Forgot Password?</a>
				<a href="register.php" style="float: right;" class="loginn">Sign Up</a>
			</div>
			<a href="index.php" class="loginn">Back To Home</a>
		</form>
	</div>
<script>
$(document).ready(function(){
$('#login').click(function(e){
e.preventDefault();
console.log(e);
var email=$('#email').val();
var password=$('#password').val();
$.ajax({
method: "POST",
url: "login_API.php",
data: {mail:email, psw:password}
})
.done(function(msg){
console.log(msg);
var result=msg.trim();
if(result=="Success")
window.location.href = "http://localhost/5530CSMMChawPoPoThaw/index.php";
else
alert('Incorrect Email or Password');

})

})
})

</script>
</body>
</html>
