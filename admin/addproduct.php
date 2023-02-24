<?php 
    include 'sidebar.php';
?>

<main>
    <link rel="stylesheet" href="css/addproducts.css">
			<div class="head-title">
				<div class="left">
					<h1>Add New Products</h1>
				</div>
			</div>
    
    <div>
    <form action="/action_page.php">

    <label for="ProductTitle">Product Title</label>
    <input type="text" id="ProdT" name="ProdTitle" placeholder="Ex: Isko Shirt...">

    <label for="ProductCategory">Product Category</label>
        <select id="ProdC" name="ProdCategory">
        <option value="" selected disabled>Select Category</option>
        <option value="1">Shirt</option>
        <option value="2">Lanyard</option>
        <option value="3">Tote Bag</option>
    </select>

    <label for="ProductPrice">Product Price</label>
    <input type="text" id="ProdP" name="ProdPrice" placeholder="">

    <label for="ProductQuantity">Product Quantity</label>
    <input type="text" id="ProdQ" name="ProdQuantity" placeholder="">

    <label for="ProductDescription">Product Description</label>
    <textarea id="ProductD" name="ProdDescription" placeholder="Write something.." style="height:200px"></textarea>

    <label for="">Featured Image</label>
        <input type="file" class="product_image" requried name="featured_img">
        
    <div>
    <label for="ProductStatus">Status </label>
        <select id="product_status" name="product_status">
        <option value="X" selected disabled>Select Status</option>
        <option selected value="1">Publish</option>
        <option value="0">Draft</option>
    </select>
    </div>
    <div>
    <input type="submit" value="Submit">
    </div>
  </form>
</div>