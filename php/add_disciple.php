<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/07/2016
 * Time: 16:06
 */
session_start();
require_once('../classes/Disciple.php');

$name = $_POST['name'];
$sex = $_POST['sex'];
$marital_status = $_POST['sex'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
$address = $_POST['physical-address'];
$member = $_POST['member'];
$join = $_POST['join'];
$submitted = $_POST['submitted'];
$who_submit = $_POST['who-submit'];
$submit = $_POST['submit'];
$submit_to = $_POST['submit-to'];
$leader = $_POST['leader'];
$department = $_POST['department'];
$role = $_POST['role'];
$ministry = $_POST['ministry'];
$sector = $_POST['sector'];
$passion = $_POST['passion'];
$future = $_POST['future'];

echo $_GET['pid'];
if(!isset($_GET['pid'])){
	echo "lalala";
	$pid = $_SESSION['prog_id'];
}else{
	echo "wooooow";
	$pid = $_GET['pid'];
}

$disciple = Disciple::newDisciple($name,$sex,$marital_status,$occupation,$email,$address,$member,$join,$submitted,$who_submit,
                        $submit,$submit_to,$leader,$department,$role,$ministry,$sector,$passion,$future,$pid);
$result = $disciple->add_disciple();
if($result) {
    echo $result;
}else{
    echo false;
}

