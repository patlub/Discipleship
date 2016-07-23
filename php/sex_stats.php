<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/07/2016
 * Time: 16:06
 */
session_start();
require_once('../classes/Statistics.php');

$data = $_GET['stat'];
$dbh = new Statistics();
$result = $dbh->get_sex_stats();
echo $result.' '.$data;
