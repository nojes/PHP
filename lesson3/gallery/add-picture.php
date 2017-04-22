<?php

include 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_FILES['picture']['error'] == 0 and (!empty($_POST['category']) or !empty($_POST['curCategory']))){
        $targetDir = (empty($_POST['category']))
            ? UPLOAD_DIR . DIRECTORY_SEPARATOR . $_POST['curCategory']
            : UPLOAD_DIR . DIRECTORY_SEPARATOR . $_POST['category'];

        if(!file_exists($targetDir)){
            mkdir($targetDir, 0777, true);
        }

        $fileName = time() . '.' . pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

        if(move_uploaded_file($_FILES['picture']['tmp_name'], $targetDir . '/' . $fileName)){
            header("Location: /lesson3/gallery/add-picture.php");
        }
    } else {
        echo 'Cannot upload file';
    }
}

$categories = getCategoryList(UPLOAD_DIR);
?>

<a href="index.php"><h4>Pictures list</h4></a>

<form method="POST" enctype="multipart/form-data">
    <?php if(!empty($categories)):?>
        <select name="curCategory">
            <option value="" selected disabled>Select Category</option>
            <?php foreach($categories as $catName):?>
                <option value="<?= $catName?>"><?= $catName?></option>
            <?php endforeach;?>
        </select>
    <?php endif;?>
    <input type="text" name="category" placeholder="category"><br>
    <input type="file" name="picture">
    <button>Upload Photo</button>
</form>
