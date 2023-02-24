<?php 
    include 'sidebar.php';
?>

<main>
    
			<div class="head-title">
				<div class="left">
					<h1>Orders</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Orders</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Orders</h3>
					
					</div>
                    <table style="width:100%">
                    <thead>
                   
                                <th>Order ID</th>
                                <th>Product Details</th>
                                <th>QTY.</th>
                                <th>Total Amount</th>
                                <th>Customer Details</th>
                                <th>Order Date</th>
                                <th>Payment Status</th>
                                <th>Delivery Status</th>
                            
                    </thead>
                    <tbody>
                            
                            <tr>
                                <td>01123</td>
                                <td>Tshirt</td>
                                <td>1</td>
                                <td>250.00</td>
                                <td>Name: Janna Manuela
                                 <br>Address: San Jose 
                                </td>
                                <td>02/16/2023</td>
                                <td>Paid</td>
                                <td>Completed</td>
                                
                            </tr>
                            <tr>
                                <td>022831</td>
                                <td>Lanyard</td>
                                <td>5</td>
                                <td>50.00</td>
                                <td>Name: Andrew Brinas
                                 <br>Address: Antipolo 
                                </td>
                                <td>02/17/2023</td>
                                <td>Paid</td>
                                <td>Completed</td>
                            </tr>
                            </table>
			    	</tbody>
				</div>
            </div>   

  <script src="js/script.js"></script>
</body>
</html>