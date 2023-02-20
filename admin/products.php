<?php 
    include 'sidebar.php';
	// include '../config/config.php';
	include '../config/queries.php';
?>


<main>
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
	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>All Products</h3>
				<i class='bx bxs-add-to-queue' ></i><p>Add Product </p>
				<i class='bx bx-filter' ></i>
				
			</div>
			<table>
				<thead>
					<tr>
						<th>Product ID</th>
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
					<?php 
						if (!empty($categories))
						{
							$count = 0;
							foreach($categories as $row)
							{ $count++;
						
					?>
					<tr>
						<td><?php echo $row['cat_id']?></td>
						<td></td>
						<td>
							<i class='bx bx-store-alt'></i><p><?php echo $row['cat_title']?></p>
						</td>
						<td></td>
						<td><?php echo $row['products']?></td>
						<td></td>
						<td>
						
							<p>100,000</p>
							
						</td>
						<td></td>
						<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->
						<td><i class='bx bxs-edit' ></i><i class='bx bx-trash' ></i></td>
						<?php 
						}} else {
						?>
						<tr>
                            <td>
                                The table is Blank.
                            </td>
                        </tr>
						<?php }?>
					

						<tr>
						<td>
							
							<p>02</p>
						</td>
						<td></td>
						<td>
							<i class='bx bx-store-alt'></i><p>Shoes</p>
							
						</td>
						<td></td>
						<td>
						
							<p>6,000</p>
							
						</td>
						<td></td>
						<td>
						
							<p>100</p>
							
						</td>
						<td></td>
						<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->
						<td><i class='bx bxs-edit' ></i><i class='bx bx-trash' ></i></td>
					
					
				</tbody>
			</table>
		</div>
	</div>
<script src="js/script.js"></script>


</body>
</html>