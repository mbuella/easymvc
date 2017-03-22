<!-- views/info.php -->
<?php $title = 'Account Information' ?>

<?php ob_start() ?>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading"><?= $title ?></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <td>First Name</td>
                                <td><?= $account['first_name'] ?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?= $account['last_name'] ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?= $account['address'] ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?= $account['gender'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="signout" class="btn btn-info">Sign Out</a>                        
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $content = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>
