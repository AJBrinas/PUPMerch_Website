<?php
    include 'sidebar.php'
?>

<!-- MAIN -->
<main>
<link rel="stylesheet" href="css/orders.css">
	<div class="head-title">
		<div class="left">
			<h1>INVENTORY</h1>
			<ul class="breadcrumb">
				<li>
					<a href="#">Dashboard</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="active" href="#">Inventory</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Out of Stock</h3>
				<i class='bx bx-plus' ></i>
				<i class='bx bx-filter' ></i>
			</div>
				<table>
				
						<thead>
							
								<th>Order ID</th>
								<th> Product Details</th>
							
						</thead>
						<tbody>
							<tr>
								<td>00123</td>
								<td>Tshirt</td>
							</tr>
							<tr>
								<td>002342</td>
                                <td>Lanyard</td>
								
							</tr>
							</tbody>
				 </table>
		</div>

		<div class="todo">
			<div class="order"> 
			<div class="head">
				<h3>Low Stock</h3>
				<i class='bx bx-plus' ></i>
				<i class='bx bx-filter' ></i>
			</div>
			<table>
						<thead>
							
								<th>Title</th>
								<th>Quantity</th>
							
						</thead>
						<tbody>
							<tr>
								<td>Tshirt</td>
                                <td>12</td>
							</tr>
								<td>Lanyard</td>
                                <td>20</td>
								
							</tr>
						</table>
</div>
</tbody>

		</div>
	</div>

</main>

<script src="js/script.js"></script>
</body>
</html>