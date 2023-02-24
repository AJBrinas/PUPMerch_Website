<?php 
// include '../config/connect.php';

// if(isset($_POST['submit'])){
//     $pcat = $_POST['product_cat'];
//     $title = $_POST['product_title'];
//     $price = $_POST['product_price'];
//     $desc = $_POST['product_desc'];
//     $image = $_FILES['product_image'];
//     $price = $_POST['product_price'];
//     $qty = $_POST['product_qty'];
//     $kword = $_POST['product_keywords'];
//     $stat = $_POST['product_status'];

//     //echo implode(",",$image);
//     // print_r($image); //to print array use this; if not warning:array converting to string
//     //picture
//     $image_name = $image['name'];
//     $img_type= $image['type'];
//     $tmp_name = $image['tmp_name'];
//     $img_type= $image['type'];
//     $img_error = $image['error'];

// 	$filename_separate = explode('.',$image_name); //separating image name and the file type
//     $file_ext = strtolower($filename_separate[1]); //getting the file type in array 1; in array [0], img name is stored

//     $allowed_ext = array('jpeg','png','img', 'jpg');
//     if(in_array($file_ext, $allowed_ext)){
//         $upload_image = '../likha_products/'.$image_name;
//         //print_r($upload_image);
//         move_uploaded_file($tmp_name, $upload_image );
//         $tsql = "INSERT INTO dbo.products (product_cat,product_title,  product_price, product_desc, product_image, product_price,product_qty,product_keywords) VALUES (?,?,?,?,?,?,?,?)";
//         $param = array($title, $upload_image);
//         $result = sqlsrv_query($conn, $tsql, $param);
//         if($result){
//             echo "inserted";
//         }else{
//             die( print_r(sqlsrv_errors(), true));
//         }
//     }
// }

include 'sidebar.php' 
?>

        <link rel="stylesheet" href="css/addprod.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
<body>
    <div class="addprod">
        
    <div class="admin-content-container">
        <h2 class="admin-heading">Add New Product</h2>
        <form id="createProduct" class="add-post-form row" action = "../config/post.php" method="post" enctype="multipart/form-data">
            
                <div class="form-group category">
                    <label for="">Product Category</label>
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
                        <option value = "<?php echo $row['product_id'] ?>"></option><?php echo $row['cat_title']?></option>
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
            
                <div class="col-md-7">
                <div class="form-group">
                    <label for="">Product Title</label>
                    <input type="text" class="form-control product_title" name="product_title" id="product_title" placeholder="Product Title" requried/>
                </div>

                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" class="form-control product_price" name="product_price" requried value="">
                </div>

                <div class="form-group">
                    <label for="">Product Description</label>
                    <textarea class="form-control product_description" name="product_desc" id="product_desc" rows="8" cols="80" requried></textarea>
                </div>
                <div class="show-error"></div>
            </div>
				
                <div class="">
                    <label for="">Featured Image</label>
                    <input type="file" name="featured_img" id="product_image" required>  
                    <img id="file" src="" width="150px"/>
                </div>

                <div class="form-group">
                    <label for="">Available Quantity</label>
                    <input type="number" class="form-control product_qty" name="product_qty" id="product_qty" requried value="">
                </div>
                

                <div class="form-group">
                        <label>Product Keywords</label>
                        <input type="text" id="product_keywords" name="product_keywords" required class="form-control" >
                        </div>
                    </div><

                    <div class="form-group">
                    <label>Status</label>
                    <select class="form-control product_status" name="product_status" id="product_status>
                        <option value="0">Publish</option>
                        <option value="1">Draft</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn-add-new" name="submit" id="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
    </div>
</body>