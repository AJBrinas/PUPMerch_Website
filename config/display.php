<?php 
include ('./connect.php');

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $image = $_FILES['file'];
    echo $title;
    echo "<br>";
    //echo implode(",",$image);
    print_r($image); //to print array use this; if not warning:array converting to string
    echo "<br>";
    $image_name = $image['name'];
    print_r($image_name);
    echo "<br>";
    $tmp_name = $image['tmp_name'];
    echo "<br>";

	$filename_separate = explode('.',$image_name); //separating image name and the file type
    print_r($filename_separate);
    echo "<br>";
    $file_ext = strtolower($filename_separate[1]); //getting the file type in array 1; in array [0], img name is stored
    print_r($file_ext);
    echo "<br>";
    $allowed_ext = array('jpeg','png','img', 'jpg');
    if(in_array($file_ext, $allowed_ext)){
        $upload_image = 'uploads/'.$image_name;
        //print_r($upload_image);
        move_uploaded_file($tmp_name, $upload_image );
        $tsql = "INSERT INTO samp_tb (img_name, img_img) VALUES (?,?)";
        $param = array($title, $upload_image);
        $result = sqlsrv_query($conn, $tsql, $param);
        if($result){
            echo "inserted";
        }else{
            die( print_r(sqlsrv_errors(), true));
        }
    }
// $image_name = $_FILES['name'];
    // $img_type= $_FILES['my_image']['type'];
	// $tmp_name = $_FILES['my_image']['tmp_name'];
    // $img_type= $_FILES['my_image']['type'];
    // $img_error = $_FILES['my_image']['error'];
}

?>

<html>
    <head>
        <title>DISPLAY</title>
    </head>
    <body>

    </body>
</html>
