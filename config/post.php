<?php 
include "config.php";

if(isset($_POST['p_cat'])){
    $cat = $_POST['p_cat'];
    $database = new Database;
	$database->select('categories', '*');
    $result = $database->getResults();

    $output = [];
    if($result>0){
        $output['$result'] = $result; 
    }
}

if(isset($_POST['create'])){
    
}

// Here is the PDO supported POST
if(isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    $title = $_POST['title'];
    $img_name = $_FILES['img']['name'];
    $img_type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $img_error = $_FILES['img']['error'];

    echo 'hatdog ko masarap <br />';
        echo $id;
        echo '<br />';
        echo $title;
        echo '<br />';
        echo $img_name;
        echo '<br />';
        echo $img_type;
        echo '<br />';
        echo $tmp_name;
        echo '<br />';
        echo $img_error;
        echo '   sHatdog ko malaki';

    
    $filename_separate = explode('.', $img_name);
    echo $filename_separate[1];
    $file_ext = strtolower($filename_separate[1]);

    $allowed_ext = array('jpeg', 'png', 'jpg');
    
    if (in_array($file_ext, $allowed_ext))
    {
        $move_image = '../img/'.$img_name;

        move_uploaded_file($tmp_name, $move_image);
        $db = new Database;
        // $db->insert($id, $title, $img_name);
        header('Location: ../products.php');
    }

}

// Adding Category
if(isset($_POST['addCategory'])) 
{
    $categoryName = $_POST['add_catname'];
    echo $categoryName;
        $db = new Database;
        $db->addCategory($categoryName);
        header('Location: ../admin/category.php');
}

// Editing Category
if (isset($_POST['editCategory']))
{
    $categoryName = $_POST['edit_catname'];
    $categoryID = $_POST['categoryID'];
    echo $categoryName;
        $db = new Database;
        $db->editCategory($categoryID, $categoryName);
        header('Location: ../admin/category.php');
}


?>