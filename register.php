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

  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
</head>
<body>
	<div class="Rform-area">
		<h3>CREATE ACCOUNT</h3>
		<form action="">

			<p>Name</p>
			<input type="text" name="" id="name" placeholder="Enter your name">

			<p>Email</p>
			<input type="text" name="" id="email" placeholder="Enter your Email">
			<font id="em_error" color="red" ></font>

			<p class="">Password</p>
			<input type="password" name="" id="password" placeholder="Enter your Password">
			<font id="error" color="red"></font>

			<p class="">Confirm Password</p>
			<input type="password" name="" id="cpassword" placeholder="Enter your Password" style="margin-bottom: 20px;
	width: 100%;">
			<font id="cerror" color="red" ></font>

			<p class="mb-3">Role :</p>
			
			<input type="radio" id="chef" name="role" value="2">
			<label for="chef">Chef</label>

			<input type="radio" id="user" name="role" value="3" checked>
			<label for="user">User</label>

			
			<input type="submit" name="" id="login" value="Sign Up">
			<div><a href="login.php" class="register">Already have an account ? Login</a></div>
			<a href="index.php" class="register">Back To Home</a>
		</form>
	</div>
	<script>
	$(document).ready(function(){
	$('#login').click(function(){
	
        var emailValid = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
        var passValid = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/;
        var username = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var cPassword = $('#cpassword').val();
        var role = $('input[name=role]:checked').val();
   
        if(emailValid.test(email) && passValid.test(password) && password == cPassword){
//             $('.input-error').html('');
            $.ajax({
            method: "POST",
	        url: "register_API.php",
                data: {username:username,email:email,pass:password,role:role},
				datatype: "json"
            }).done(function(msg){
           
            var result=msg.trim();
            
                if(result == 'Success'){
                    window.location.href="http://localhost/5530CSMMChawPoPoThaw/user_profile.php";
                }

                 else if(result == 'Registered'){
                     $('#em_error').html('This email is already registered');
                 }
                else{
                    alert("Unable to register!");
                }

            });
        }

        else{
//             if(username.trim() == ""){
//                 $('#name-error').html('Please enter username');
//             }
            if(!emailValid.test(email)){
                $('#em_error').html('Please enter valid email');
            }
            if(!passValid.test(password)){
                $('#error').html('Please enter at least 1 upper & lowercase, 1 special character, 8 characters');
            }
            if(password != cPassword){
                $('#cerror').html('Please confirm your password');
            }
        }
    })
	})
	
	</script>
</body>
</html>
