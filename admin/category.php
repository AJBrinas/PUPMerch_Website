<?php 
    include 'sidebar.php';
?>


<main>
<link rel="stylesheet" href="admin/css/category.css">
			<div class="CategoryContainer">
				<div class="Category">
					<h1>Category</h1>
				</div>
			</div>
			<a class="add-new-category" href="add_category.php">Add New Category</a>

			<div class="table-data">
				<div class="All Categories">
					<div class="head">
						<h3>Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
						
						
					</div>
					<table>
						<thead>
							<tr>
								<th>All Categories</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<p>T-Shirts</p>
								</td>
								<td>
									<i class='bx bx-trash'></i>
								</td>
							</tr>
							<tr>
								<td>
									<p>Lanyards</p>
								</td>
								<td>
									<i class='bx bx-trash'></i>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</main>
<script src="js/script.js"></script>


</body>
</html>