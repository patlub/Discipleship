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
    <script src="https://cdn.jsdelivr.net/chartist.js/0.9.8/chartist.min.js"></script>
    <script src="js/stats.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/0.9.8/chartist.min.css">
    <title>Discipleship</title>
</head>
<body>
<div class="container-fluid">
    <?php include_once 'includes/header.php.inc'; ?>

    <div class="row">
        <div id="sex-pie" class="col-md-4 ct-chart ct-perfect-fourth">

        </div>
    </div>
</div>
<div class="loader"><!-- Place at bottom of page --></div>v
</body>
</html> 
