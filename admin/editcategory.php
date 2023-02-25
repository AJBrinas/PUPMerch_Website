<?php 
    include 'sidebar.php';
?>

<main>
    <link rel="stylesheet" href="css/addproducts.css">
        <div class="head-title">
            <div class="left">
                <h1>Edit Category</h1>
            </div>
        </div>
    
    <div>
        <form action="../config/post.php" method="post">
            <label for="edit_catname">Category Title</label>
            <input type="text" id="AddCatT" name="edit_catname" placeholder="Ex: Lanyard...">
            <div>
            <input type="submit" name="editCategory" value="editCategory">

            <input type="hidden" name="categoryID" value="<?php echo $_GET['id'] ?>">
            </div>
        </form>
    </div>