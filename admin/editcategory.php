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
    <form action="/action_page.php">

    <label for="CategoryTitle">Category Title</label>
    <input type="text" id="CatT" name="CatTitle" placeholder="Ex: Lanyard...">

    <div>
    <input type="submit" value="Submit">
    </div>
    </form>
    </div>