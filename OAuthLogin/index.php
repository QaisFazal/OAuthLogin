<?php
session_start();
//uncomment the below code segment to directly login user if an access token exists for the user. NOTE: check login.php header too.

// if (!isset($_SESSION['access_token'])) {
//     header('Location: login.php');
//     exit();
// }
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
</head>

<body>
    <?php
    if (!empty($_SESSION['userData'])) { ?>

        <table>
            <tr>

                <td> ID:</td>
                <td><?php echo $_SESSION['userData']['id']; ?></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $_SESSION['userData']['name']; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $_SESSION['userData']['email']; ?></td>
            </tr>

        </table>
    <?php } elseif (!empty($_SESSION['twitterData'])) { ?>
        <table>
            <tr>

                <td> ID:</td>
                <td><?php echo $_SESSION['twitterData']->id ?></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $_SESSION['twitterData']->name ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $_SESSION['twitterData']->email ?></td>
            </tr>
        </table>
        <textarea style="height:400px;width:100%"><?php echo print_r($_SESSION['twitterData'], true); ?></textarea>

    <?php } else { ?>
        <h1> Nothing to display! </h1>
    <?php  } ?>
    <a href="logout.php"> LOGOUT! </a>

</body>

</html>