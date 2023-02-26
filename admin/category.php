<?php 
    include 'sidebar.php';
?>

<main>
<link rel="stylesheet" href="css/category.css">
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


	<div class="categorytable">
		<div class="order">
			<div class="head">
				<h3>All Categories</h3>
				<a href="addcategory.php"><i class='bx bxs-add-to-queue' ></i><p>Add Category</p></a>
			</div>
			
			<table  style="width:100%">
				<?php 
					$database = new Database;
					$database->select('categories', '*');
					$result = $database->getResults();
				?>
				<thead>
					<tr>
						<th>Title</th>
						<th>Actions</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if (!empty($result))
						{
							$count = 0;
							foreach($result as $row)
							{ $count++;
					?>
					<tr>
						<td>
							<i class='bx bx-store-alt'></i>
							<?php echo $row['cat_title'] ?>
						</td>
						<td></td>
						<td><a href="editcategory.php?id=<?php echo $row['cat_id'] ?>"><span class="status edit">Edit</span></td>
						<td><span class="status delete">
						<a href="delete.php?action_type=delete&id=<?php echo $row['cat_id'];?>" onclick="return confirm('Are you sure to delete this member?')">Delete</a>
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

	<!-- Pending to delete -->
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