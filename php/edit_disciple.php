<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/07/2016
 * Time: 16:06
 */
session_start();
require_once('../classes/Disciple.php');

$id = $_POST['id'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$marital_status = $_POST['marital-status'];
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

$disciple = Disciple::newDisciple($name,$sex,$marital_status,$occupation,$email,$address,$member,$join,$submitted,$who_submit,
                        $submit,$submit_to,$leader,$department,$role,$ministry,$sector,$passion,$future,null);
$disciple->set_id($id);
$result = $disciple->edit_disciple();
if($result) {
    echo $result;
}else{
    echo false;
}

