<?php 
    include 'sidebar.php';
	// include '../config/config.php';
	//include '../config/queries.php';
?>

<?php
	$database = new Database;
	$database->select('products', '*');
	$result = $database->getResults();
?>

<main>
	<link rel="stylesheet" href="css/products.css">
	<div class="head-title">
		<div class="left">
			<h1>All Products</h1>
			<ul class="breadcrumb">
				<li>
					<a href="#">Dashboard</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="active" href="#">Products</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="products-table">
		<div class="order">
			<div class="head">
				<h3>All Products</h3>
				<a href="addproduct.php"><i class='bx bxs-add-to-queue' ></i><p>Add Product </p></a>
				<i class='bx bx-filter' ></i>
				
			</div>
			<table  style="width:100%">
				<thead>
					<tr>
						<th>Product ID</th>
						<th></th>
						<th> Product Image </th>
						<th></th>
						<th>Title</th>
						<th></th>
						<th>Price</th>
						<th></th>
						<th>Quantity</th>
						<th></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php 
						if (!empty($result))
						{
							$count = 0;
							foreach($result as $row)
							{ $count++;
					?>
						<td><p><?php echo $count; ?></p></td>
						<td></td>
						<td><img src="img/<?php echo $row['product_image'];?>" alt="" width="10" height="10"></td>
						<td></td>
						<td><p><?php echo $row['product_title']; ?> </p></td>
						<td></td>
						<td><p><?php echo $row['product_price']; ?></p></td>
						<td></td>
						<td><p><?php echo $row['product_qty']; ?></p></td>
						<td></td>
						<td><a href="editcategory.php"><span class="status edit">Edit</span></a></td>
						<td><span class="status delete">
							<a href="../config/deleteprod.php?action_type=delete&id=<?php echo $row['product_id'], '&name=products';?>" onclick="return confirm('Are you sure to delete this member?')">Delete</a>
						</span></td>
					</tr>
					<?php }} else { ?>
							<tr>
								<td>
									Blank
								</td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	
<script src="js/script.js"></script>

</body>
</html>