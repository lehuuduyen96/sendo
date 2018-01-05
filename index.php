<?php
ob_start();
session_start();
require_once( 'vendor/View.php');
require_once ('vendor/boostrap.php');
require_once('config/connect.php');
require_once( 'vendor/BaseController.php');
require_once( 'models/MasterModel.php');

$app = new boostrap();


?>