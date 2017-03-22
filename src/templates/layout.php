<!-- presentation -->
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- main CSS -->
        <link rel="stylesheet" type="text/css" href="assets/styles/main.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <!-- header section -->
            <!-- Nav -->
        <header>
            <nav class="navbar navbar-inverse container-fluid">              
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                  <a class="navbar-brand" href="./">Codenames</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                  </ul>
                  <!-- <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul> -->
                </div>              
            </nav>
        </header>

        <!-- body section -->
        <?= $content ?>       

        <!-- footer section -->
        <footer class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    All Rights Reserved                    
                </div>
            </div>
        </footer>
    </body>
</html>