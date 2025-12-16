<?php
include "config.php";

$id = $_GET['id'];
$sql = "SELECT * FROM cats WHERE id=$id";
$result = mysqli_query($conn, $sql);
$cat = mysqli_fetch_assoc($result);
?>

<?php include "header.php"; ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads/<?= $cat['image'] ?>" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2><?= $cat['name'] ?></h2>
            <h4 class="text-primary"><?= $cat['price'] ?></h4>
            <p><?= $cat['description'] ?></p>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
