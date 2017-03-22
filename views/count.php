<!-- views/info.php -->
<?php $title = 'Registered Accounts' ?>

<?php ob_start() ?>
    <h3><?= $title ?></h3>
    <p>Number of enrolled accounts: <strong><?= $count?></strong></p>

<?php $content = ob_get_clean() ?>

<?php include 'views/layout.php' ?>
