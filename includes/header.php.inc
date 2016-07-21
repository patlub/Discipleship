<div id="heading" align="center">Christ's Heart Discipleship</div>
<div>
    
</div>
<div id="menu" class="row">
        <div id="home" class="menu-item col-md-2"><a href="index.php" >Home</a></div>
        <div id="add-disciple" class="menu-item col-md-2"><a href="add_disciple.php" >Add Disciple</a></div>
        <div id="stats" class="menu-item col-md-2"><a href="stats.php">Statistics</a></div>
        <div id="roll-call" class="menu-item col-md-2"><a href="roll-call.php">Attendance</a></div>
        <div id="add_program" class="menu-item col-md-2"><a data-toggle="modal" href="" data-target="#programModal">Add Program</a></div>
        
<?php 
          include_once('modals/modal.php');
?>
        <div id="programs" class="menu-item col-md-2">
        <form method="post" role="form"         action="php/add_disciple.php">
            <div class="form-group">
                    <div class="">
                        <select id="program" name="program" class="form-control" onChange="window.location.href=this.value">
    <?php 

                        require_once('config/config.php');
                        session_start();
                        $query = "SELECT * FROM programs";
                        $result = mysql_query($query);
                        while ($row = mysql_fetch_array($result)){

                        if(!isset($_GET['pid'])){                                    
                            if($row['status'] == 'on-going'){
                                    $_SESSION['prog_id'] = $row['number'];
                                    ?>

                                    <option value="<?php echo $_SERVER['PHP_SELF'].'?pid='.$row['number'];?>" selected><?php echo "Program ".$row['number'];?></option>
                                  <?php 

                            }else{
                                ?>
                                <option value="<?php echo $_SERVER['PHP_SELF'].'?pid='.$row['number'];?>"><?php echo "Program ".$row['number'];?></option>
                                <?php
                            }
                        }else{
                            if ($_GET['pid'] == $row['number']) { ?>
                                   <option value="<?php echo $_SERVER['PHP_SELF'].'?pid='.$row['number'];?>" selected><?php echo "Program ".$row['number'];?></option>
                                   <?php 
                               }else{?>
                                    <option value="<?php echo $_SERVER['PHP_SELF'].'?pid='.$row['number'];?>"><?php echo "Program ".$row['number'];?></option>
                                    <?php

                               }   
                        }
                    }

                            ?>
                    
                         </select>
                    </div>
                </div>
                </form>
        </div>
    </div>