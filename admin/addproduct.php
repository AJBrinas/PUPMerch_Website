<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN</title>
        <link rel="stylesheet" href="css/addprod.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

      </head>
<body>
    <div class="addprod">
        
    <div class="admin-content-container">
        <h2 class="admin-heading">Add New Product</h2>
        <form id="createProduct" class="add-post-form row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="">Product Title</label>
                    <input type="text" class="form-control product_title" name="product_title" placeholder="Product Title" requried/>
                </div>
                <div class="form-group category">
                    <label for="">Product Category</label>
                   
                    <select class="options" name="product_cat">
                        <option value="" selected disabled>Select Category</option>
                        <option value="1" >Option 1</option>
                        <option value="2" >Option 2</option>
                        <option value="3" >Option 3</option>
                       
                    </select>
                </div>
               
               
                <div class="form-group">
                    <label for="">Product Description</label>
                    <textarea class="form-control product_description" name="product_desc" rows="8" cols="80" requried></textarea>
                </div>
                <div class="show-error"></div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Featured Image</label>
                    <input type="file" class="product_image" requried name="featured_img">
                    <img id="image" src="" width="150px"/>
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" class="form-control product_price" name="product_price" requried value="">
                </div>
                <div class="form-group">
                    <label for="">Available Quantity</label>
                    <input type="number" class="form-control product_qty" name="product_qty" requried value="">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control product_status" name="product_status">
                        <option selected value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-add-new" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

        
    
</html>