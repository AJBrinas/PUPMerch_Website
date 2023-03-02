<?php 
// include '../config/connect.php';


include 'sidebar.php' 
?>
<html>
    <body>
        <head>
        <link rel="stylesheet" href="css/addproducts.css">
					<h1>Add New Products</h1>
        </head>
    
            <div>
                <form id="createProduct" class="add-post-form row" action = "../config/post.php" method="post" enctype="multipart/form-data">
                <div>
                    <label>Product Title</label>
                    <input type="text"  name="product_title" id="product_title" placeholder="Ex: Isko Shirt..." requried/>
                </div>
                <div>
                    <label>Product Category</label>
                    <?php 
					$database = new Database;
					$database->select('categories', '*');
					$result = $database->getResults();
				    ?>
                    <select class="options" name="product_cat" id="product_cat">
                    <option value="" selected disabled>Select Category</option>
                    <?php 
						if (!empty($result))
						{
							$count = 0;
							foreach($result as $row)
							{ $count++;
					?>    
                        <option value = "<?php echo $row['cat_id'] ?>"><?php echo $row['cat_title']?></option>
                        <?php 
						}} else {
						?>
						<tr>
                        <option>
								''----The table is Blank.----''
                        </option>
						</tr>
						<?php }?>
                    </select>
                </div>
                <div>
                    <label>Product Price</label>
                    <input type="text" class="form-control product_price" name="product_price" requried value="">
                </div>
                <div>
                    <label>Available Quantity</label>
                    <input type="number" class="form-control product_qty" name="product_qty" id="product_qty" requried>
                </div>
                <div>
                    <label>Product Description</label>
                    <textarea name="product_desc" id="product_desc" rows="8" cols="80" placeholder="Write something.." style="height:200px" requried></textarea>
                </div>
                <div>
                    <label>Product Keywords</label>
                    <input type="text" id="product_keywords" name="product_keywords"  required>
                </div>
                <div>
                <label>Featured Image</label>
                <input type="file" name="featured_img" id="product_image" required>  
                    <!---<img id="file" src="" width="150px"/> --->
                </div>
                <div>
                <label>Status </label>
                <select id="product_status" name="product_status">
                    <option value="X" selected disabled>Select Status</option>
                    <option selected value="1">Publish</option>
                    <option value="0">Draft</option>
                </select>
                </div>
                <button type="submit" name="addprod">submit</button>
            </form>
        </div>
    </body>
</html>