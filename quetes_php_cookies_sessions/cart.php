<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Votre Pannier</h2>
        <ul>
            <?php foreach ($_COOKIE as $id => $cookie) : ?>
                <p><?php echo $id !== 'PHPSESSID' ?  'il y a ' . ' ' .  $cookie['name'] . ' ' . $id . ' dans votre pannier '  : '' ?></p>
            <?php endforeach ?>
        </ul>
 </div>
</section>
<?php require 'inc/foot.php'; ?>
