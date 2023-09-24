<?php

include 'connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>

    <!--font awesome cdnjs link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

     <!--custom css file link-->
    <link rel="stylesheet" href="admin_style.css">

</head>
<body>

<?php include 'admin_header.php' ?>


























<!--custon js file link-->
<script src="admin_script.js"></script>

</body>
</html>