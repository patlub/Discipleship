<?php require_once 'classes/DatabaseHelper.php'; ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
      <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <title>Discipleship</title>
</head>
<body>
<div class="container-fluid">
    <?php include_once 'includes/header.php.inc' ?>
    <form method="post" role="form" action="php/submit_roll_call">
    <div id="date-box">
    <div class="row">
        <div class="form-group">
                    <div class="col-md-2">
                        <input id="datepicker" type="text" name="datepicker" value="mm/dd/YY" class="form-control"
                               placeholder="Date" required/>
                    </div>
                </div>
                </div>
    </div>
    <div id="roll-call-table-box" class="row">
        <table id="roll-call-table" cellpadding="0" cellspacing="0" border="0"
               class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th width="100" style="color:#FF0000;">Roll-call</th>
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
            $db_helper->get_roll_call();

            ?>
            </tbody>
        </table>
        <div class="form-group">
                    <div class="col-md-2" style="float:right;">
                        <input id="datepicker" type="submit" name="submit" value="Submit" class="form-control btn btn-success"
                               placeholder="Date"/>
                    </div>
                </div>
        </form>
    </div>
</div>
</body>
</html>
