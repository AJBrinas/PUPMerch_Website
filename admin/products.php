<?php 
    include 'sidebar.php';
	// include '../config/config.php';
	//include '../config/queries.php';
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
						<td><p>01</p></td>
						<td></td>
						<td><img src="img/shirt8.jpg" alt="" width="10" height="10"></td>
						<td></td>
						<td><p>Isko Shirt</p></td>
						<td></td>
						<td><p>1000</p></td>
						<td></td>
						<td><p>200</p></td>
						<td></td>
						<td><a href="editcategory.php"><span class="status edit">Edit</span></a></td>
						<td><span class="status delete"onclick="confirmation()">Delete</span></td>
			
						<tr>
						<td><p>01</p></td>
						<td></td>
						<td><p><img src="img/shirt8.jpg" alt="" width="10" height="10"></p></td>
						<td></td>
						<td><p>Isko Shirt</p></td>
						<td></td>
						<td><p>1000</p></td>
						<td></td>
						<td><p>200</p></td>
						<td></td>
						<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->

						<td><a href="editcategory.php"><span class="status edit">Edit</span></td>
						<td><span class="status delete"onclick="confirmation()">Delete</span></td>
					</tr>

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