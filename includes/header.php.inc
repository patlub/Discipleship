<div id="heading" align="center">Christ's Heart Discipleship</div>
<div>
    
</div>
<div id="menu" class="row">
        <div id="add-disciple" class="menu-item col-md-2"><a href="" >Add Disciple</a></div>
        <div id="stats" class="menu-item col-md-2"><a href="">Statistics</a></div>
        <div id="roll-call" class="menu-item col-md-2"><a href="">Roll Call</a></div>
        <div id="add_program" class="menu-item col-md-2"><a href="" data-toggle="modal" data-target="#myModal">Add Program</a></div>
        
<?php 
          include_once('modals/modal.php');
?>
        <div id="programs" class="menu-item col-md-2">
        <form method="post" role="form"         action="php/add_disciple.php">
            <div class="form-group">
                    <div class="row">
                        <select id="program" name="program" class="form-control" onChange="window.location.href=this.value">
    <?php 

                        require_once('config/config.php');
                        $query = "SELECT * FROM programs";
                        $result = mysql_query($query);
                        while ($row = mysql_fetch_array($result)){

                        if(!isset($_GET['pid'])){                                    
                            if($row['status'] == 'on-going'){
                                    $pid = $row['number'];
                                    echo $pid;?>

                                    <option value="<?php echo 'index.php?pid='.$row['number'];?>" selected><?php echo "Program ".$row['number'];?></option>
                                  <?php 

                            }else{
                                ?>
                                <option value="<?php echo 'index.php?pid='.$row['number'];?>"><?php echo "Program ".$row['number'];?></option>
                                <?php
                            }
                        }else{
                            if ($_GET['pid'] == $row['number']) { ?>
                                   <option value="<?php echo 'index.php?pid='.$row['number'];?>" selected><?php echo "Program ".$row['number'];?></option>
                                   <?php 
                               }else{?>
                                    <option value="<?php echo 'index.php?pid='.$row['number'];?>"><?php echo "Program ".$row['number'];?></option>
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