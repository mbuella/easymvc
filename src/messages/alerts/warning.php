<?php ob_start() ?>

<div class="alert alert-warning">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	<strong>WARNING: </strong>
	<?= $warning_msg ?>
</div>	

<?php $msg = ob_get_clean() ?>