<?php 
    include 'sidebar.php';

    $db = new Database;
    $db->select('categories', '*');
    $result = $db->getResults();
?>

<main>
    <link rel="stylesheet" href="css/addproducts.css">
			<div class="head-title">
				<div class="left">
					<h1>Edit Products</h1>
				</div>
			</div>
    
    <div>
    <form action="../config/post.php" method="post" enctype="multipart/form-data">

    <label for="ProductTitle">Product Title</label>
    <input type="text" id="ProdT" name="ProdTitle" placeholder="Ex: Isko Shirt...">

    <label for="ProductCategory">Product Category</label>
        <select id="ProdC" name="ProdCategory">
        <option value="" selected disabled>Select Category</option>
        <?php
        if (!empty($result))
						{
							$count = 0;
							foreach($result as $row)
							{ $count++;

						?>
        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_title']; ?></option>
        <?php }} else { ?>
        <tr>
            <td>
                Blank
            </td>
        </tr>
        <?php } ?>
    </select>

    <label for="ProductPrice">Product Price</label>
    <input type="text" id="ProdP" name="ProdPrice" placeholder="">

    <label for="ProductQuantity">Product Quantity</label>
    <input type="text" id="ProdQ" name="ProdQuantity" placeholder="">

    <label for="ProductDescription">Product Description</label>
    <textarea id="ProductD" name="ProdDescription" placeholder="Write something.." style="height:200px"></textarea>

    <label>Product Keywords</label>
    <input type="text" id="product_keywords" name="product_keywords"  required>
                
    <label for="">Featured Image</label>
        <input type="file" class="product_image" requried name="featured_img">

    <input type="hidden" name="idprod" value="<?php echo $_GET['id'] ?>">
        
    <div>
    <label for="ProductStatus">Status </label>
        <select id="product_status" name="product_status">
        <option value="X" selected disabled>Select Status</option>
        <option selected value="1">Publish</option>
        <option value="0">Draft</option>
    </select>
    </div>
    <div>
    <button type="submit" name="editprod">Edit</button>
    </div>
  </form>
</div>