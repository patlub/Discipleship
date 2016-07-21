<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/07/2016
 * Time: 17:36
 */
class Disciple
{
    protected $_id;
    protected $_name;
    protected $_sex;
    protected $_marital_status;
    protected $_occupation;
    protected $_email;
    protected $_address;
    protected $_member_status;
    protected $_join_date;
    protected $_submit_status;
    protected $_submit_to;
    protected $_want_submit;
    protected $_want_submit_to;
    protected $_minister;
    protected $_department;
    protected $_role;
    protected $_join_ministry;
    protected $_sector;
    protected $_passion;
    protected $_ministry_future;
    protected $_program;

    public function __construct()
    {

    }

    public function get_id()
    {
        return $this->_id;
    }

    public function set_id($id)
    {
        $this->_id = $id;
    }

    public function get_name()
    {
        return $this->_name;
    }

    public function set_name($name)
    {
        $this->_name = $name;
    }

    public function get_sex()
    {
        return $this->_sex;
    }

    public function set_sex($sex)
    {
        $this->_sex = $sex;
    }

    public function get_marital_status()
    {
        return $this->_marital_status;
    }

    public function set_marital_status($maritsl_status)
    {
        $this->_marital_status = $maritsl_status;
    }

    public function get_occupation()
    {
        return $this->_occupation;
    }

    public function set_occupation($occupation)
    {
        $this->_occupation = $occupation;
    }

    public function get_email()
    {
        return $this->_email;
    }

    public function set_email($email)
    {
        $this->_email = $email;
    }

    public function get_address()
    {
        return $this->_address;
    }

    public function set_address($address)
    {
        $this->_address = $address;
    }

    public function get_member_status()
    {
        return $this->_member_status;
    }

    public function set_member_status($member_status)
    {
        $this->_member_status = $member_status;
    }

    public function get_join_date()
    {
        return $this->_join_date;
    }

    public function set_join_date($join_date)
    {
        $this->_join_date = $join_date;
    }

    public function get_submit_status()
    {
        return $this->_submit_status;
    }

    public function set_submit_status($submit_status)
    {
        $this->_submit_status = $submit_status;
    }

    public function get_submit_to()
    {
        return $this->_submit_to;
    }

    public function set_submit_to($submit_to)
    {
        $this->submit_to = $submit_to;
    }

    public function get_want_submit()
    {
        return $this->_want_submit;
    }

    public function set_want_submit($want_submit)
    {
        $this->_want_submit = $want_submit;
    }

    public function get_want_submit_to()
    {
        return $this->_want_submit_to;
    }

    public function set_want_submit_to($want_submit_to)
    {
        $this->_want_submit_to = $want_submit_to;
    }

    public function get_minister()
    {
        return $this->_minister;
    }

    public function set_minister($minister)
    {
        $this->_minister = $minister;
    }

    public function get_department()
    {
        return $this->_department;
    }

    public function set_department($department)
    {
        $this->_department = $department;
    }

    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($role)
    {
        $this->_role = $role;
    }

    public function get_join_ministry()
    {
        return $this->_join_ministry;
    }

    public function set_join_ministry($join_ministry)
    {
        $this->_join_ministry = $join_ministry;
    }

    public function get_sector()
    {
        return $this->_sector;
    }

    public function set_sector($sector)
    {
        $this->_sector = $sector;
    }

    public function get_passion()
    {
        return $this->_passion;
    }

    public function set_passion($passion)
    {
        $this->_passion = $passion;
    }

    public function get_ministry_future()
    {
        return $this->_ministry_future;
    }

    public function set_ministry_future($ministry_future)
    {
        $this->_ministry_future = $ministry_future;
    }

    public function get_program()
    {
        return $this->_program;
    }

    public function set_program($program)
    {
        $this->_program = $program;
    }

    public static function newDisciple($name, $sex, $marital_status, $occupation, $email, $address, $member_status, $join_date, $submit_status, $submit_to,
                                       $want_submit, $want_submit_to, $minister, $department, $role, $join_ministry, $sector, $passion, $ministry_future, $program)
    {
        $instance = new self();
        $instance->loadNewDisciple($name, $sex, $marital_status, $occupation, $email, $address, $member_status, $join_date, $submit_status, $submit_to,
            $want_submit, $want_submit_to, $minister, $department, $role, $join_ministry, $sector, $passion, $ministry_future, $program);
        return $instance;
    }

    public function loadNewDisciple($name, $sex, $marital_status, $occupation, $email, $address, $member_status, $join_date, $submit_status, $submit_to,
                                    $want_submit, $want_submit_to, $minister, $department, $role, $join_ministry, $sector, $passion, $ministry_future, $program)
    {

        $this->_name = $name;
        $this->_sex = $sex;
        $this->_marital_status = $marital_status;
        $this->_occupation = $occupation;
        $this->_email = $email;
        $this->_address = $address;
        $this->_member_status = $member_status;
        $this->_join_date = $join_date;
        $this->_submit_status = $submit_status;
        $this->_submit_to = $submit_to;
        $this->_want_submit = $want_submit;
        $this->_want_submit_to = $want_submit_to;
        $this->_minister = $minister;
        $this->_department = $department;
        $this->_role = $role;
        $this->_join_ministry = $join_ministry;
        $this->_sector = $sector;
        $this->_passion = $passion;
        $this->_ministry_future = $ministry_future;
        $this->_program = $program;
    }

    public function add_disciple()
    {
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('INSERT INTO disciples VALUES
                                          (:id,:full_name,:sex,:marital,:occupation,:email,:address,:member_status,:join_date,:submit_status,
                                           :submit_to,:want_submit,:want_submit_to,:minister,:department,:role,:join_ministry,:sector,:passion,:ministry_future,:program)');
        $id = '';
        $statementHandler->bindParam(':id', $id);
        $statementHandler->bindParam(':name', $this->_name);
        $statementHandler->bindParam(':sex', $this->_sex);
        $statementHandler->bindParam(':marital', $this->_marital_status);
        $statementHandler->bindParam(':email', $this->_email);
        $statementHandler->bindParam(':occupation', $this->_occupation);
        $statementHandler->bindParam(':address', $this->_address);
        $statementHandler->bindParam(':member_status', $this->_member_status);
        $statementHandler->bindParam(':join_date', $this->_join_date);
        $statementHandler->bindParam(':submit_status', $this->_submit_status);
        $statementHandler->bindParam(':submit_to', $this->_submit_to);
        $statementHandler->bindParam(':want_submit', $this->_want_submit);
        $statementHandler->bindParam(':want_submit_to', $this->_want_submit_to);
        $statementHandler->bindParam(':minister', $this->_minister);
        $statementHandler->bindParam(':department', $this->_department);
        $statementHandler->bindParam(':role', $this->_role);
        $statementHandler->bindParam(':join_ministry', $this->_join_ministry);
        $statementHandler->bindParam(':sector', $this->_sector);
        $statementHandler->bindParam(':passion', $this->_passion);
        $statementHandler->bindParam(':ministry_future', $this->_ministry_future);
        $statementHandler->bindParam(':program', $this->_program);
        $result = $statementHandler->execute();
        if ($result) {
            return $result;
        }
        return false;
    }

    public function get_disciple($id)
    {
        $disciple = $this->fetch_disciple($id);
        $this->_id = $disciple['id'];
        $this->_name = $disciple['full_name'];
        $this->_sex = $disciple['sex'];
        $this->_marital_status = $disciple['marital_status'];
        $this->_occupation = $disciple['occupation'];
        $this->_email = $disciple['email'];
        $this->_address = $disciple['address'];
        $this->_member_status = $disciple['member'];
        $this->_join_date = $disciple['join_date'];
        $this->_submit_status = $disciple['submitted'];
        $this->_submit_to = $disciple['who_submit'];
        $this->_want_submit = $disciple['submit'];
        $this->_want_submit_to = $disciple['submit_to'];
        $this->_minister = $disciple['leader'];
        $this->_department = $disciple['department'];
        $this->_role = $disciple['role'];
        $this->_join_ministry = $disciple['ministry'];
        $this->_sector = $disciple['sector'];
        $this->_passion = $disciple['passion'];
        $this->_ministry_future = $disciple['future'];
        $this->_program = $disciple['prog_id'];
    }

    public function fetch_disciple($id)
    {
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT * FROM disciples WHERE id = :id');
        $statementHandler->bindParam(':id', $id, PDO::PARAM_STR);
        $statementHandler->execute();
        if ($statementHandler->rowCount() == 1) {
            $disciple = $statementHandler->fetch(PDO::FETCH_ASSOC);
            return $disciple;
        }
        return false;
    }

    public function edit_disciple()
    {
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('UPDATE disciples SET full_name = :name,sex = :sex,marital_status = :marital,
        email = :email, occupation = :occupation, address = :address, member = :member_status, join_date = :join_date, submitted=:submit_status,
        who_submit = :submit_to, submit = :want_submit, submit_to = :want_submit_to, leader = :minister, department = :department,
        role = :role, ministry = :join_ministry, sector = :sector, passion = :passion, future = :ministry_future WHERE id = :id');

        $statementHandler->bindParam(':id', $this->_id,PDO::PARAM_INT);
        $statementHandler->bindParam(':name', $this->_name,PDO::PARAM_STR);
        $statementHandler->bindParam(':sex', $this->_sex,PDO::PARAM_STR);
        $statementHandler->bindParam(':marital', $this->_marital_status,PDO::PARAM_STR);
        $statementHandler->bindParam(':email', $this->_email,PDO::PARAM_STR);
        $statementHandler->bindParam(':occupation', $this->_occupation,PDO::PARAM_STR);
        $statementHandler->bindParam(':address', $this->_address,PDO::PARAM_STR);
        $statementHandler->bindParam(':member_status', $this->_member_status,PDO::PARAM_STR);
        $statementHandler->bindParam(':join_date', $this->_join_date,PDO::PARAM_STR);
        $statementHandler->bindParam(':submit_status', $this->_submit_status,PDO::PARAM_STR);
        $statementHandler->bindParam(':submit_to', $this->_submit_to,PDO::PARAM_STR);
        $statementHandler->bindParam(':want_submit', $this->_want_submit,PDO::PARAM_STR);
        $statementHandler->bindParam(':want_submit_to', $this->_want_submit_to,PDO::PARAM_STR);
        $statementHandler->bindParam(':minister', $this->_minister,PDO::PARAM_STR);
        $statementHandler->bindParam(':department', $this->_department,PDO::PARAM_STR);
        $statementHandler->bindParam(':role', $this->_role,PDO::PARAM_STR);
        $statementHandler->bindParam(':join_ministry', $this->_join_ministry,PDO::PARAM_STR);
        $statementHandler->bindParam(':sector', $this->_sector,PDO::PARAM_STR);
        $statementHandler->bindParam(':passion', $this->_passion,PDO::PARAM_STR);
        $statementHandler->bindParam(':ministry_future', $this->_ministry_future,PDO::PARAM_STR);
        $result = $statementHandler->execute();
        if ($result) {
            return $result;
        }
        return false;
    }

    private function connect_db()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=discipleship", "root", "");
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
}