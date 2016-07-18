<?php 
session_start();
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
    <?php include_once('includes/header.php.inc');
    ?>
    <div id="form-div" class="row">
        <form method="post" role="form" enctype="multipart/form-data" action="php/add_disciple.php">
            <div class="col-md-3 section-div">
                <div id="section1" class="section">Section 1</div>
                <div class="form-group">
                    <div class="row">
                        <input id="name" type="text" name="name" class="form-control" placeholder="Name" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="sex" class="control-label">Sex</label>
                        <select id="sex" name="sex" class="form-control">
                            <option value="m">Male</option>
                            <option value="m"><a href="hello.php">link</a></option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="marital-status" class="control-label">Marital Status</label>
                        <select id="marital-status" name="marital-status" class="form-control">
                            <option value="m">Married</option>
                            <option value="e">Engaged</option>
                            <option value="s" selected>Single</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="occupation" type="text" name="occupation" class="form-control"
                               placeholder="Occupation" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="email" type="text" name="email" class="form-control" placeholder="Email Address" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="physical-address" type="text" name="physical-address" class="form-control"
                               placeholder="Physical Address" required/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 section-div">
                <div id="section2" class="section">Section 2</div>
                <div class="form-group">
                    <div class="row">
                        <label for="member" class="control-label">Are you a Church Member ?</label>
                        <select id="member" name="member" class="form-control">
                            <option value="y" selected>Yes</option>
                            <option value="n">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="join" type="text" name="join" class="form-control"
                               placeholder="If Yes, When did u join" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="submitted" class="control-label">Are you currently submitted ?</label>
                        <select id="submitted" name="submitted" class="form-control">
                            <option value="y" selected>Yes</option>
                            <option value="n">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="who-submit" type="text" name="who-submit" class="form-control"
                               placeholder="If Yes, To who" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="submit" class="control-label">If No, would you like to submit ?</label>
                        <select id="submit" name="submit" class="form-control">
                            <option value="y" selected>Yes</option>
                            <option value="n">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="submit-to" type="text" name="submit-to" class="form-control"
                               placeholder="If Yes, To who" required/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 section-div">
                <div id="section3" class="section">Section 3</div>
                <div class="form-group">
                    <div class="row">
                        <label for="leader" class="control-label">Are you a leader/minister at CHC ?</label>
                        <select id="leader" name="leader" class="form-control">
                            <option value="y">Yes</option>
                            <option value="n" selected>No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="depertment" type="text" name="department" class="form-control"
                               placeholder="If Yes, Which department" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="role" type="text" name="role" class="form-control"
                               placeholder="What is you role in that department" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="ministry" class="control-label">If No, would you like to join ministry ?</label>
                        <select id="ministry" name="ministry" class="form-control">
                            <option value="y" selected>Yes</option>
                            <option value="n">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="sector" type="text" name="sector" class="form-control"
                               placeholder="If Yes, Which Sector" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="passion" type="text" name="passion" class="form-control"
                               placeholder="What's your passion" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <input id="future" type="text" name="future" class="form-control"
                               placeholder="Yourself 2-5 years in ministry" required/>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <div class="row">
                        <input id="submit-form" type="submit" name="submit-form" value="Submit" class="form-control btn btn-success"/>
                    </div>
                </div>
        </form>
    </div>
</div>
<script type="text/javascript">$('.datepicker').datepicker();</script>
</body>
</html>
