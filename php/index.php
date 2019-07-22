<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="My testworks PHP">
    <meta name="author" content="Alex N. Bolotov">
    <title>TestWorks PHP</title>

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
	<!-- Navbar start -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	  <a class="navbar-brand" href="#">TestWorks PHP</a>
	</nav>
	<!-- Navbar end -->
	<!-- Main start -->
	<main role="main" class="container">
	
	<br><br><br>
	
		<!-- Include php code -->
		<?php
		include_once "testworks.php";
		?>
	
	</main>
	<!-- Main end -->
</body>
</html>
