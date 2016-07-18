<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17/07/2016
 * Time: 22:08
 */
class DatabaseHelper
{

    function get_disciples()
    {
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT * FROM disciples');
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($user = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $user['id'];
                $name = $user['name'];
                $sex = $user['sex'];
                $status = $user['marital_status'];
                $occupation = $user['occupation'];
                $email = $user['email'];
                $address = $user['address'];
                $church_member = $user['member'];
                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $sex; ?>
                    </td>
                    <td>
                        <?php echo $status; ?>
                    </td>
                    <td>
                        <?php echo $occupation; ?>
                    </td>
                    <td>
                        <?php echo $email; ?>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    <td>
                        <?php echo $church_member; ?>
                    </td>
                    <td align="center">
                        <a href="view_disciple.php?<?php echo $id; ?>" class="btn btn-primary btn-xs">View</a>
                        <a href="edit_disciple.php?<?php echo $id; ?>" class="btn btn-success btn-xs">Edit</a>
                        <a href="delete_disciple.php?<?php echo $id; ?>" class="btn btn-danger btn-xs">Delete</a>
                        <a href="attend_disciple.php?<?php echo $id; ?>" class="btn btn-warning btn-xs">Attendence</a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }


    function get_roll_call()
    {
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT * FROM disciples');
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($user = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $user['id'];
                $name = $user['name'];
                $sex = $user['sex'];
                $status = $user['marital_status'];
                $occupation = $user['occupation'];
                $email = $user['email'];
                $address = $user['address'];
                $member = $user['member'];
                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td align="center">
                        <!-- <div class="checkbox"> -->
                              <label><input type="checkbox" value=""></label>
                        <!-- </div> -->
                    </td>
                    <td>
                        <?php echo $sex; ?>
                    </td>
                    <td>
                        <?php echo $status; ?>
                    </td>
                    <td>
                        <?php echo $occupation; ?>
                    </td>
                    <td>
                        <?php echo $email; ?>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    <td>
                        <?php echo $member; ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    /*
     * Function to connect to database
     *@return PDO object for database operations
     *
     */
    public function connect_db()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=discipleship", "root", "patrick");
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
} 