<?php
session_start();
require_once('classes/Disciple.php');
require_once('includes/form_selects.php.inc')
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
    <?php
    include_once('includes/header.php.inc');
    $id = $_GET['id'];
    $disciple = new Disciple();
    $disciple->get_disciple($id);
    ?>
    <div id="disc-table-box" class="col-md-8" style="margin: 5%;">
    <table id="disc-table" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th colspan="2">Full Details</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <div class="disc-label" style="font-variant-caps: all-petite-caps;">Full Name:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_name(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">sex:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_sex(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">Status</div>

            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_marital_status(); ?></div>

            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">occupation</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_occupation(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">email:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_email(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">address:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_address(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">church member:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_member_status(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">date of joining:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_join_date(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">submission:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_submit_status(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">submitted to:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_submit_to(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">Would You like to submit:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_want_submit(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">want to submit to:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_want_submit_to(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">leader/Minister:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_minister(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">Department:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_department(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">role:</div>
            </td>
            <td>
                <div class="disc-label">role:</div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">Do you want to join ministry:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_join_ministry(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">sector:</div>

            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_sector(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">passion:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_passion(); ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="disc-label">Where do you see yourself 2 - 5 years:</div>
            </td>
            <td>
                <div class="disc-detail"><?php echo $disciple->get_ministry_future(); ?></div>
            </td>
        </tr>

        </tbody>
    </table>
    </div>
</div>
</body>
</html>
