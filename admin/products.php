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
						<td>
							
							<p>01</p>
						</td>
						<td></td>
						<td>
						</i><p>sHIRT</p>
							
						</td>
						<td></td>
						<td>
						
							<p>1000</p>
							
						</td>
						<td></td>
						<td>
						
							<p>200</p>
							
						</td>
						<td></td>
						<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->
					
						<td><a href="addproduct.php"><i class='bx bxs-edit' ></i><p>Edit</p></a><td>
						<td><a href="addproduct.php"><i class='bx bx-trash' ></i><p>Delete</p></a></td>
						
					<button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>

					<div id="id01" class="modal">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
					<form class="modal-content" action="/action_page.php">
						<div class="container">
						<h1>Delete Account</h1>
						<p>Are you sure you want to delete your account?</p>
						
						<div class="clearfix">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
						</div>
						</div>
					</form>
					</div>

					<script>
					// Get the modal
					var modal = document.getElementById('id01');

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
					}
					</script>
						
						
					

						<tr>
						<td>
							
							<p>02</p>
						</td>
						<td></td>
						<td>
						</i><p>Shoes</p>
							
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
						<td><a href="addproduct.php"><i class='bx bxs-edit' ></i><p>Edit</p></a><td>
						<td><a href="addproduct.php"><i class='bx bx-trash' ></i><p>Delete</p></a></td>
					
				</tbody>
			</table>
		</div>
	</div>
<script src="js/script.js"></script>


</body>
</html>