
<?php 
include 'sidebar.php'
?>

<main>
<link rel="stylesheet" href="css/users.css">
			<div class="head-title">
				<div class="left">
					<h1>ALL USERS</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Users</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="users-table">
				<div class="order">
					<div class="head">
						<h3>USERS</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
						
					</div>
					<table  style="width:100%">
						<thead>
							<tr>
                             <th>User ID</th>
								<th></th>
								<th>Full Name</th>
								<th></th>
								<th>Email</th>
								<th></th>
								<th>Contact No.</th>
								<th></th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						<tbody>
							<tr>
								<td>
								    
									<p>01</p>
								</td>
								<td></td>
								<td>
								    <p>Royette Vergara</p>
									
								</td>
								<td></td>
								<td>
								
									<p>rv@gmail.com</p>
									
								</td>
								<td></td>
								<td>
								
									<p>0912345678</p>
									
								</td>
								<td></td>

                               

								<!--<td><span class="status process">Edit</span><span class="status completed">Delete</span></td>-->
								<td><a href="editcategory.php"><span class="status edit">Edit</span></td>
								<td><span class="status delete"onclick="confirmation()">Delete</span></td>
							

								<tr>
								<td>
								    
									<p>02</p>
								</td>
								<td></td>
								<td>
								   <p>Jane Pajela</p>
									
								</td>
								<td></td>
								<td>
								
									<p>Jsp@gmail.com</p>
									
								</td>
								<td></td>
								<td>
								
									<p>0987654321</p>
									
								</td>
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