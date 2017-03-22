<!-- views/info.php -->
<?php $title = 'Forbidden Access | Codenames!' ?>

<?php ob_start() ?>

    <h3>We're sorry we cannot let you access that page.</h3>
    <p>
    	Maybe you want to <a href="signin">signin</a> or <a href="#">register</a> an account?
    </p>

<?php $content = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>
