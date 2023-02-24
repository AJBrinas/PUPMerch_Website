<?php 
session_start();
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

//uploading image
// if(isset($_POST['create'])){
//     if(!isset($_POST['product_title']) || empty($_POST['product_title'])){
//         echo json_encode(array('error'=>'Title Field is Empty.')); exit;
//     }elseif(!isset($_POST['product_cat']) || empty($_POST['product_cat'])){
//         echo json_encode(array('error'=>'Category Field is Empty.')); exit;
//     }elseif(!isset($_POST['product_desc']) || empty($_POST['product_desc'])){
//         echo json_encode(array('error'=>'Description Field is Empty.')); exit;
//     }elseif(!isset($_FILEST['featured_img']) || empty($_FILES['featured_img'])){
//         echo json_encode(array('error'=>'Image Field is Empty.')); exit;
//     }elseif(!isset($_POST['product_price']) || empty($_POST['product_price'])){
//         echo json_encode(array('error'=>'Price Field is Empty.')); exit;
//     }elseif(!isset($_POST['product_qty']) || empty($_POST['product_qty'])){
//         echo json_encode(array('error'=>'Quantity Field is Empty.')); exit;
//     }elseif(!isset($_POST['product_status']) || empty($_POST['product_status'])){
//         echo json_encode(array('error'=>'Status Field is Empty.')); exit;
//     }else{
//         $errors = array();
//         $img_name = $_FILES['featured_img']['name'];
//         $img_size = $_FILES['featured_img']['size'];
//         $tmp_name = $_FILES['featured_img']['temp'];
//         $img_name = str_replace(array(',',''),'',$img_name);
//         $file_ext = explode(',',$img_name);
//         $file_ext = strtolower(end($file_ext));
//         $allowed_exs = array("jpg", "jpeg", "png");

//         if(in_array($file_ext,$allowed_exs)===false){
//             $errors[] = '<div class="alert alert-danger"> extension not allowed, please choose a JPEG or PNG file.</div>';
//         }
//         if($file_size > 2097152){
//             $errors[]='<div class="alert alert-danger">File size must be exactely 2 MB</div>';
//         }
//         // check image errors
//         if(!empty($errors)){
//         echo json_encode($errors); exit;
//         }else{
        
//             $img_name = time().str_replace(array(' ','_'), '-', $img_name);

//             // if(isset($_POST['product_brand']) && !empty($_POST['product_brand'])){
//     		// 	$product_brand = $_POST['product_brand'];
// 	    	// }else{
// 			// 	$product_brand = '0';
// 	    	// }
	
//             $db = new Database();

//         $params = [
//                 'product_title' => $db->escapeString($_POST['product_title']),
//         		'product_cat' => $db->escapeString($_POST['product_cat']),
//         		'featured_image' => $db->escapeString($file_name),
//         		'product_desc' => $db->escapeString($_POST['product_desc']),
//         		'product_price' => $db->escapeString($_POST['product_price']),
//                 'qty' => $db->escapeString($_POST['product_qty']),
//         		'product_status' => $db->escapeString($_POST['product_status'])
//         	];

//         	$db->select('product','product_title',null,"product_title = '{$params['product_title']}'",null,null);
//         	$exist = $db->getResults();

//         	if(!empty($exist)){
//         		echo json_encode(array('error'=>'Title is Already Exists.')); exit;
//         	}else{
//         		$db->insert_prod($params);
//         		$db->sql("UPDATE sub_categories SET cat_products = cat_products + 1 WHERE sub_cat_id = {$params['product_sub_cat']}");
//         		$response = $db->getResults();
//         		if(!empty($response)){
//         			/* directory in which the uploaded file will be moved */
//             		move_uploaded_file($tmp_name,"upload/".$img_name);
//             		echo json_encode(array('success'=>$response)); exit;
//         		}
//         	}
//         }
//     }
// }

//adding product
if(isset($_POST['addproduct'])){
    $title = $_POST['product_title'];
    $pcat = $_POST['product_cat'];
    $desc = $_POST['product_desc'];
    $image = $_POST['featured_img'];
    $price = $_POST['product_price'];
    $qty = $_POST['product_qty'];
    $stat = $_POST['product_status'];

    $database = new Database;
    $database->insertcat($prod);
    header("Location: ../admin/products.php"); 

}

if(isset($_POST['dummy']) && isset($_FILES['my_image'])){

    // echo "<pre>";
	// print_r($_FILES['my_image']);
	// echo "</pre>";

    // $img_name = $_FILES['my_image']['name'];
    // $img_size = $_FILES['my_image']['size'];
    // $img_tmp = $_FILES['my_image']['temp'];
    // $img_type = $_FILES['my_image']['type'];
    
    // $id = $_POST['id'];
    // $title = $_POST['title'];
    // echo ' hey';

	// 		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	// 		$img_ex_lc = strtolower($img_ex);
    //         echo ' hey';

	// 		$allowed_exs = array("jpg", "jpeg", "png"); 
    //         echo ' hey';

	// 		if (in_array($img_ex_lc, $allowed_exs)) {
	// 			$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
	// 			$img_upload_path = 'uploads/'.$new_img_name;
	// 			move_uploaded_file($tmp_name, $img_upload_path);
    //             echo ' hey';
    //             $database = new Database;
    //             $database->insertimg($id, $title, $new_img_name);
                
	// 		}else {
	// 			$em = "You can't upload files of this type";
	// 	    header("Location: functions.php?error=$em");
	// 		}
		}


