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
    <form action="/action_page.php">

    <label for="AddCategoryTitle">Category Title</label>
    <input type="text" id="AddCatT" name="AddCatTitle" placeholder="Ex: Lanyard...">

    <div>
    <input type="submit" value="Submit">
    </div>
    </form>
    </div>