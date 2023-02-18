
<?php 
    include 'header.php';
?>

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
      <td><img src="img/shirt1.jpg" alt="#"></td>
      <td>name</td>
      <td>price</td>
      <td><input type="number" value="1" min="1"></td>
      <td>price</td>
      <td><button class="remove-button">Remove</button></td>
    </tr>
    <tr>
      <td><img src="img/shirt2.jpg" alt="#"></td>
      <td>name</td>
      <td>price</td>
      <td><input type="number" value="2" min="1"></td>
      <td>price</td>
      <td><button class="remove-button">Remove</button></td>
    </tr>
    <tr>
      <td><img src="img/shirt3.jpg" alt="#"></td>
      <td>name</td>
      <td>price</td>
      <td><input type="number" value="3" min="1"></td>
      <td>price</td>
      <td><button class="remove-button">Remove</button></td>
    </tr>
    <tr>
      <td colspan="4"><b>Total Amount</b></td>
      <td><b>price</b></td>
      <td></td>
    </tr>
  </tbody>
</table>

<div class="checkout-container">
  <button class="checkout-button">Proceed to Checkout</button>
</div>
</div>

