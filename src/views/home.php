<!-- views/info.php -->
<?php $title = 'Welcome to Codenames!' ?>

<?php ob_start() ?>

	
<main class="jumbotron text-center">
	<div class="container">
	    <h1><?= $title ?></h1>
	    <h3>
	    	Here at Codenames, we make people connect.
	    </h3>
	    <div class="row">
	    	<div class="col-md-12">
	    		<a href="signin" class="btn btn-primary">Sign In</a>
    		 	<span>or</span> 
	    		<a href="signup" class="btn btn-link">Register</a>			    		
	    	</div>
	    </div>
	</div>
</main>


<?php $content = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>
