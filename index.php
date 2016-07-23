<?php 
require_once 'classes/DatabaseHelper.php';
 ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Discipleship</title>
</head>
<body>
<div class="container-fluid">
    <?php include_once 'includes/header.php.inc' ?>
    <div id="table-box" class="row" align="center">
        <table id="disc-table" cellpadding="0" cellspacing="0" border="0"
               class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Sex</th>
                <th width="10">Status</th>
                <th>Occupation</th>
                <th>Email</th>
                <th>Address</th>
                <th width="10">Church Member</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $db_helper = new DatabaseHelper();
            $db_helper->get_disciples();

            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html> 
