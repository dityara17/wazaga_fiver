<?php


ob_start();
session_start();
date_default_timezone_set("Asia/Bangkok");

define('DIR', __DIR__);

require DIR."/../vendor/autoload.php";
require 'MailClass.php';
require 'MainClass.php';

?>