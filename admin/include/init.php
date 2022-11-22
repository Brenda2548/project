<?php
ob_start();
date_default_timezone_set('Asia/Manila');
$webroot = "c:xampp/htdocs/";
define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', $webroot.DS.'wedding-management-php'.DS.'admin');
define('INCLUDES_PATH', SITE_ROOT.DS.'include');
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Helper.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/config.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/database.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/db_object.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Session.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Accounts.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Account_Details.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Booking.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Guest.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Categories.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Features.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/EventWedding.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Gallery.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Users.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Events.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/include/Liquidation.php");
?>