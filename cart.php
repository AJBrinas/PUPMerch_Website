
<?php 
    include 'header.php';
?>

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/cart.css">


<table class="cart-table">
<h2 class="cart-category">My Cart</h2>

  <thead>
    <tr>
      <th>Product Image</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Quantity</th>
      <th>Sub Total</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="img/shirt4.jpg" alt="#"></td>
      <td>Mula Sayo, Para sa Bayan</td>
      <td>$350</td>
      <td><input type="number" value="2" min="1"></td>
      <td>$700</td>
      <td><button class="remove-button">Remove</button></td>
    </tr>
    <tr>
      <td><img src="img/shirt3.jpg" alt="#"></td>
      <td>Isko, Iska</td>
      <td>$350</td>
      <td><input type="number" value="2" min="1"></td>
      <td>$700</td>
      <td><button class="remove-button">Remove</button></td>
    </tr>
    <tr>
      <td><img src="img/shirt2.jpg" alt="#"></td>
      <td>Cat PUPQC</td>
      <td>$120</td>
      <td><input type="number" value="1" min="1"></td>
      <td>$120</td>
      <td><button class="remove-button">Remove</button></td>
    </tr>
    <tr>
      <td colspan="4"><b>Total Amount</b></td>
      <td><b>$7000</b></td>
      <td></td>
    </tr>
  </tbody>
</table>

<div class="checkout-container">
  <a class="checkout-button" style="text-decoration:none" href="invoice.php">Proceed to Checkout</a>
</div>
</div>

            <script src="js/nav.js"></script>
            <script src="js/home.js"></script>
  
