<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class=" bg-primary bg-opacity-10">
  
    	<div class="d-flex justify-content-between p-3 bg-primary">
			<h2 class="h4  text-white ps-3">ONLINE INTERACTIVE TUTOR</h2>
            <a href="logout.php" class="btn text-white btn-outline-info btn-sm">
            	Logout
            </a>
			
		</div>
		<div class="p-5">
			<h3 class="display-5 ">Hello <?=$_SESSION['fname']?></h3>
			<p class="h4">Welcome to Online Interactive Tutor. <br> Here your learn mutliple 
				topics in the field of Mathematics and Physics courses
			</p>
		</div>
		
		<div class="d-flex flex-column p-5 vh-75 pt-2 bg-info bg-opacity-10" style="height:350px;">
			<h2 class="h2 pt-4">Available topics:</h2>
			<a href="quad.php" class="pt-3 link">Quadratic Equation</a>
			<a href="simple_interest.php" class="pt-3 link">Calculating Simple Interest</a>	
			<a href="compound_interest.php" class="pt-3 link">Calculating Compound Interest</a>	
			<a href="simul-eqn.php" class="pt-3 link">Simultaneous Equation with 2 unknowns</a>
			<a href="simult_eqn2.php" class="pt-3 link">Simultaneous Equation with 3 unknowns</a>

		</div>
		<footer class="text-center pt-4">
			&copy; Online Interactive Tutor
		</footer>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>