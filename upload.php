<?php
if (isset($_FILES['upload'])) {

$allowed = array('jpg', 'jpeg', 'png', 'gif');
$extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));
$errors = array();
if (in_array($extension, $allowed)==false) {
$errors[] = 'you can only upload images';
}
if($_FILES['upload']['size']>100000){
$errors[] = 'the file was too big';
}
if(empty($errors)){
move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}");
}
}
?>
<html>

    <head></head>
    <body>
        <div>
            <?php
            if (isset($errors)) {
            if(empty($errors)){
            echo '<a href="files/', $_FILES['upload']['name'], '">View Image</a>';
            }
            else{
            foreach($errors as $error)
            {
            echo $error;
            }
            }
            }
            ?>
        </div>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    <input type="file" name="upload">
                    <input type="submit" value="Upload">
                </p>
            </form>
        </div>
    </body>
</html>