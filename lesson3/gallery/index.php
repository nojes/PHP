<?php

include 'functions.php';

$currentCategory = (!empty($_GET['category']))
    ? UPLOAD_DIR . DIRECTORY_SEPARATOR . $_GET['category']
    : UPLOAD_DIR;

$categories = getCategoryList(UPLOAD_DIR);
$images = getCategoryImages($currentCategory);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Gallery</h1>
<a href="add-picture.php">
    <h4>Add new picture</h4>
</a>

<?php if(!empty($categories)):?>

    <div style="width: 20%; float: left">
        <ul>
            <?php foreach($categories as $category): ?>
                <li>
                    <a href="?category=<?= $category ?>"><?= $category ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div style="width: 80%">
        <?php foreach($images as $image): ?>
            <img src="<?= $image ?>" alt="" width="300">
        <?php endforeach; ?>
    </div>

<?php endif;?>

</body>
</html>
