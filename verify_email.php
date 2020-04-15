<?php

require "config/DeclareClass.php";

if (empty($_GET['token']) && $_GET['email']) {
    echo "<script>location='./';</script>";
}

$token = $_GET['token'];
$email = $_GET['email'];

$use->verifyGemail($token, $email);

echo "<script>alert('Your account successfully verified');location='index.php'</script>";

