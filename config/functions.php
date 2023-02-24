<?php 
function inputfields($placeholder,$name,$value,$type){
    $ele="
    <div>
    <input type = '$type' name='$name' placeholder='$placeholder' value='$value'>
    </div>
    ";
    echo $ele;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
    <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
        <?php inputfields("title","title","","text")?>
        <?php inputfields("","file","","file")?>
        <input type="submit" class="btn btn-dark"  name="submit"></input>
        
    </form>
    </div>
</body>
</html>
    