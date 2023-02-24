<?php 
    include 'sidebar.php';
	include '../config/functions.php';
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
				<a href="addcategory.php"><i class='bx bxs-add-to-queue' ></i><p>Add Category </p></a>
				<i class='bx bx-filter' ></i>
			</div>
			<table>
				<?php 
//					$database = new Database;
//					$database->select('categories', '*');
//					$result = $database->getResults();
				?> 
				<thead>
					<tr>
						<th>Title</th>
						<th></th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
//						if (!empty($result))
//						{
//							$count = 0;
//							foreach($result as $row)
//							{ $count++;
//					?>
					<tr>
						<td>
						<i class='bx bx-store-alt'></i>
						<?php //echo $row['cat_title']?>
						</td>
						<td></td>

						<td><a href="editcategory.php"><span class="status process">Edit</span></td>
						<td><span class="status completed"onclick="confirmation()">Delete</span></td>
						
					</tr>
					<?php 
						// }} else {
						?>
						<tr>
							<td>
								''----The table is Blank.----''
							</td>
						</tr>
						<?php // }?>
				</tbody>
			</table>
		</div>
	</div>

	<script>
          function confirmation(){
            var result = confirm("Are you sure to delete?");
            if(result){
              console.log("Deleted")
            }
          }
        </script>
	
<script src="js/script.js"></script>


</body>
</html>