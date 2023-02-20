<?php 
    include 'sidebar.php';
	include '../config/functions.php'
?>


<main>
	<div class="head-title">
		<div class="left">
			<h1>Categories</h1>
			<ul class="breadcrumb">
				<li>
					<a href="#">Dashboard</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="active" href="#">Categories</a>
				</li>
			</ul>
		</div>
	</div>


	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>All Categories</h3>
				<i class='bx bxs-add-to-queue' ></i><p>Add Category </p>
				<i class='bx bx-filter' ></i>
				
			</div>
			<table>
				<thead>
					<tr>
						<th>Title</th>
						<th></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						if (!empty(category()))
						{
							$count = 0;
							foreach($categories as $row)
							{ $count++;
						
					?>
					<tr>
						<td>
							<i class='bx bx-store-alt'></i>
							<?php echo $row['cat_title']?>
						</td>
						<td></td>
						<!-- <td><span class="status process">Edit</span><span class="status completed">Delete</span></td> -->
						<td><i class='bx bxs-edit' > <span class="status process">Edit</span></i></td>
						<td><i class='bx bx-trash' > <span class="status completed">Delete</span></i></td>
					</tr>
					<?php 
						}} else {
						?>
						<tr>
							<td>
								the table is Blank.
							</td>
						</tr>
						<?php }?>
				</tbody>
			</table>
		</div>
	</div>
<script src="js/script.js"></script>


</body>
</html>