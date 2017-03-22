<!-- views/info.php -->
<?php $title = 'User Signin' ?>

<?php ob_start() ?>

<main class="container text-center">
    <div class="row">    	
    	<div class="col-md-12">    		
			<form method="POST" id="signin_form">
	    		<h3><?= $title ?></h3>
	    		<?= $msg ?>
				<div class="form-group">
					<label for="signin_cname">
						Codename:
					</label>
					<input type="text"
						   class="form-control"
						   name="signin_cname"
						   id="signin_cname"
						   value="<?= $cname?>"
						   required
						   autofocus>
				</div>
				<div class="form-group">
					<label for="signin_pword">
						Password:
					</label>
					<input type="password"
				 		   class="form-control"
				 		   name="signin_pword"
				 		   id="signin_pword"
				 		   required>
				</div>
				<!-- <div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div> -->
				<button type="reset"
						class="btn btn-warning">
					Clear
				</button>
				<button type="submit"
					    name="signin"
					    class="btn btn-primary">
			    	Submit
		    	</button>				
		    	
			</form>
    	</div>
	</div>
    </div>
</main>


<?php $content = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>
