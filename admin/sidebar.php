<?php 
	include '../config/config.php';
?>
<html>
<head>

    <title>PUP MERCH </title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<link rel="stylesheet" href="css/sidebar.css">
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="logo">
			<img src="img/logo.png"alt="logo" width="225" height="100">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="category.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Categories</span>
				</a>
			</li>
			<li>
				<a href="products.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<li>
				<a href="orders.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
			<li>
				<a href="Users.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Users</span>
				</a>
			</li>
		</ul>
		
		<ul class="side-menu">
		<li>
				<a href="inventory.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Inventory</span>
				</a>
			</li>
			<li>
				<a href="delisting.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Delisting Product</span>
				</a>
			</li>
			<li>
				<a href="bestselling.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Best Selling Product</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<p><strong> Hi, Admin! </strong></p>
			</a>
			<a href="img/people.png" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->