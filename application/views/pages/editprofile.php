<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bathik Co.</title>
	<?php
    echo $css;
  ?>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
      font-family: Arial, Helvetica, sans-serif;
    }
		.header{
			background-color: black;
		}

    input[type=text], input[type=password] {
      width: 100%;
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
      padding: 15px 15px;
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
	<script>
	$(document).ready(function(){
    	$(".dropdown-toggle").dropdown();
	});
	</script>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-expand-lg navbar-dark">
  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="#">Woman</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Man</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Children</a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Account
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#">Wishlist</a>
          				<a class="dropdown-item" href="#">History</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="#">Edit Profile</a>
          				<a class="dropdown-item" href="index.php">Logout</a>
        			</div>
      			</li>
    		</ul>

    	<nav class="nav navbar-nav navbar-right">
  			<a class="navbar-brand" href="home.php">
    			<img src="<?php echo base_url('/assets/images/batik_warna.png'); ?>" width="50" height="50" alt="">
  			</a>
		</nav>
  	</div>
</nav>
</div>
<div class="body">
  <form action="home.php" method="post" style="max-width:1200px;margin-left:70px;">

      <h1 align="center">Edit Profile</h2>

      <br>

        <input type="text" placeholder="Enter Full Name" name="full_name" required>

        <input type="text" placeholder="Enter Address" name="address" required>

        <input type="text" placeholder="Enter Mobile Phone" name="mobile_phone" required>

        <input type="text" placeholder="Enter Email" name="email" required>

        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
          <button value="submit" type="submit" class="btn">Edit Profile</button>
    </form>
</div>
<?php
    echo $js;
?>
</body>
</html>