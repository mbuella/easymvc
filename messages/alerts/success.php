<?php ob_start() ?>

<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	<strong>SUCCESS: </strong>
	<?= $success_msg ?>
</div>	

<?php $msg = ob_get_clean() ?>