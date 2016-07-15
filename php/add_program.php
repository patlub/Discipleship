<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/07/2016
 * Time: 16:06
 */
session_start();
require_once('../classes/Program.php');

$number = $_POST['number'];
$date = $_POST['start_date'];
$status = "to-start";

$program = new Program($number,$date,$status);
$result = $program->add_program();
if($result) {
    echo $result;
}else{
    echo false;
}

