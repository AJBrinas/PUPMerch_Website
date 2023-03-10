<?php
    include 'sidebar.php';

	$database = new Database;
	$database->select('products', '*');
	$result = $database->getResults();

?>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info"> 
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
					
					
						<h3>0</h3>
						<p>Orders</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Orders</h3>
						<!-- <i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
						 -->
					</div>
					<table style="width:100%">
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Royette Vergara</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Janna Manuela</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
					<h3>Products</h3>
					</div>
					<table style="width:100%">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Quantity</th>
							</tr>
						</thead>
						
						<?php 
							$database = new Database;
							$database->select('products', '*');
							$result = $database->getResults();

							if (!empty($result))
						{
							$count = 0;
							foreach($result as $row)
							{ $count++;

						?>
						<!-- <i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i> -->
						<tbody>
						<tr>
							<td>
							<p><?php echo $row['product_title'] ?></p>
							</td>
							<!-- <td>01-10-2021</td> -->
							<td><span class="status pending"><?php echo $row['product_qty'] ?></span></td>
						</tr>
						</tbody>
						<?php }} else { ?>
							<tr>
						<td>
							Blank
						</td>
					</tr>
					<?php } ?>
					</table>
					
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script.js"></script>
</body>
</html>