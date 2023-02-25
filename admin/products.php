<?php 
    include 'sidebar.php';
	// include '../config/config.php';
	//include '../config/queries.php';
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
				<a href="addproduct.php"><i class='bx bxs-add-to-queue' ></i><p>Add Product </p></a>
				<i class='bx bx-filter' ></i>
				
			</div>
			<table>
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
						<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->
					
						<td><a href="editproducts.php"><i class='bx bxs-edit' ></i><p>Edit</p></a><td>
						<td></td>
						<td><a href="addproduct.php"><i class='bx bx-trash' ></i><p>Delete</p></a></td>
						
					</tr>
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
						<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->
<<<<<<< HEAD
						 <td><input type="button" class="status_process" value="EDIT"></i></td>
						<td><i class='bx bx-trash' > <span class="status completed" onclick="confirmation()">Delete</span></i></td>
					
					
=======
						<td><a href="editproducts.php"><i class='bx bxs-edit' ></i><p>Edit</p></a><td>
						<td></td>
						<td><a href="addproduct.php"><i class='bx bx-trash' ></i><p>Delete</p></a></td>
					</tr>
>>>>>>> 9a47366575b693a290c2c7b25f9fb4bc01ef3af7
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