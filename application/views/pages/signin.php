<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bathik Co.</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		#right{
			width: 50%;
			float: right;
		}

		#left {
			width: 50%;
			float: left;
		}


		.logo{
			height: 110px;
			width: 110px;
			float: right;
		}
		h1{
			padding-top: 120px;
		}

		.input-container {
		  display: -ms-flexbox; /* IE10 */
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		.icon {
		  padding: 10px;
		  background: black;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		.input-field {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field:focus {
		  border: 2px solid dodgerblue;
		}

		.btn {
		  background-color: blue;
		  color: white;
		  padding: 15px 20px;
		  border: none;
		  cursor: pointer;
		  width: 20%;
		  opacity: 0.9;
		  float: right;
		}

		.btn:hover {
		  opacity: 1;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div id="left">
        <?php
            echo $left_signin;
        ?>
	</div>
	<div id="right">
		<img class="logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
		<form action="#" method="post" style="max-width:500px;margin:30px;">

			<h1 align="left">Sign In</h2>
			<h5 align="left">Don't have an account? <a href="signup.php" style="text-decoration:none">Create Now</a> </h5>

			<br>

			<div class="input-container">
		        <i class="fa fa-user icon"></i>
		        <input class="input-field" type="text" placeholder="Enter Username. . ." name="username" required>
		    </div>

		    <div class="input-container">
        		<i class="fa fa-key icon"></i>
        		<input class="input-field" type="password" placeholder="Enter Password. . ." name="password" required>
      		</div>

      		<button value="Login" type="submit" class="btn">Sign In</button>
		</form>
	</div>
</body>
</html>