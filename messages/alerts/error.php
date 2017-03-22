<?php ob_start() ?>

<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	<strong>ERROR: </strong>
	<?= $error_msg ?>
</div>	

<?php $msg = ob_get_clean() ?>