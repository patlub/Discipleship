<?php require_once 'classes/DatabaseHelper.php'; ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <title>Discipleship</title>
</head>
<body>
<div class="container-fluid">
    <?php include_once 'includes/header.php.inc' ?>
    <div id="table-box" class="row">
        <table id="disc_table" cellpadding="0" cellspacing="0" border="0"
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
