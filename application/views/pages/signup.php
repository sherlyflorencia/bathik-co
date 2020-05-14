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

		.bathik{
			height: 670px;
			width: 670px;
		}

		.logo{
			height: 110px;
			width: 110px;
			float: right;
		}
		h1{
			padding-top: 120px;
		}

		input[type=text], input[type=password] {
		  width: 93%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  display: inline-block;
		  border: 1px solid black;
		  background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		  border: 1px solid black;
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
            echo $left_signup;
        ?>
	</div>
	<div id="right">
		<img class="logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
		<form action="home.php" method="post" style="max-width:500px;margin:30px;">

			<h1 align="left">Sign Up</h2>

			<br>

		    <input type="text" placeholder="Enter Full Name" name="full_name" required>

		    <input type="text" placeholder="Enter Address" name="address" required>

		    <input type="text" placeholder="Enter Mobile Phone" name="mobile_phone" required>

		    <input type="text" placeholder="Enter Email" name="email" required>

		    <input type="password" placeholder="Enter Password" name="password" required>
		    <br>
      		<button value="submit" type="submit" class="btn">Sign Up</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>