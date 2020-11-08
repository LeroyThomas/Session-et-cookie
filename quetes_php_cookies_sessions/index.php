<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php
if (empty($_SESSION['login'])) {
header("Location: login.php");
}
if (!empty($_GET['cart'])) {

    foreach ($_COOKIE as $id => $cookie) {

        if (!isset($_COOKIE[$id])) {
            $value = 1;
            setcookie($id, $value);
        }else{
            $value=$_COOKIE[$id]++;
            setcookie($id, $value);
        }
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <form role="form" action="" method="get" >
                            <input type="hidden" name="add_to_cart" value="<?= $id; ?>" />
                            <button href="add_to_cart=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </button>
                        </form>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
