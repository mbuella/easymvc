<?php
// index.php
//data
    $account = [
        "first_name" => "Marlon",
        "last_name" => "Buella",
        "address" => "Project 4, Quezon City",
        "gender" => "male",
    ];
?>
<!-- presentation -->
<!DOCTYPE html>
<html>
    <head>
        <title>Account Information</title>
    </head>
    <body>
        <h1>Account Information</h1>
        <table>
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
    </body>
</html>

<?php
$account = [];
?>