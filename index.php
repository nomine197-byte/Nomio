<?php
include "config.php";

$sql = "SELECT * FROM cats";
$result = mysqli_query($conn, $sql);
?>

<?php include "header.php"; ?>

<section class="container py-5">
    <h2 class="mb-4 text-center">Манай Муурнууд</h2>

    <div class="row">
        <?php while ($cat = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="uploads/<?= $cat['image'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5><?= $cat['name'] ?></h5>
                        <p class="text-primary fw-bold"><?= $cat['price'] ?></p>
                        <a href="cat.php?id=<?= $cat['id'] ?>" class="btn btn-primary w-100">
                            Дэлгэрэнгүй
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php include "footer.php"; ?>
