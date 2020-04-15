<?php
require "../config/DeclareClass.php";
if (empty($_SESSION['user'])) {
    echo "<script>location='../';</script>";
}
if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    echo "<script>alert('successfully log out');location='../';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Eternam | Accueil</title>
    <?php include('includes/divers_head.html'); ?>
</head>

<body bgcolor="red">
<?php include('includes/divers_navbar.php'); ?>
<?php include('includes/main_appli.php'); ?>
<div class="container">

</div>
</body>
</html>
