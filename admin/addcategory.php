<?php 
    include 'sidebar.php';
?>

<main>
    <link rel="stylesheet" href="css/addproducts.css">
        <div class="head-title">
            <div class="left">
                <h1>Add Category</h1>
            </div>
        </div>
    
    <div>
        <form action="../config/post.php" method="post">

            <label for="add_catname">Category Title</label>
            <input type="text" id="AddCatT" name="add_catname" placeholder="Ex: Lanyard...">
            
            <div>
            <input type="submit" name="addCategory" value="addCategory">
            </div>
        </form>
    </div>