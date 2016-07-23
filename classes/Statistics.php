<?php
/**
 * Created by PhpStorm.
 * User: PATRICK
 * Date: 7/23/2016
 * Time: 9:25 AM
 */

class Statistics {

    public function get_sex_stats(){
        $male_count = null;
        $female_count = null;
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as male_count FROM disciples WHERE sex = :male');
        $male = 'Male';
        $statementHandler->bindParam(':male', $male);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $male_count = $result['male_count'];
        }
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as female_count FROM disciples WHERE sex = :female');
        $female = 'Female';
        $statementHandler->bindParam(':female', $female);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $female_count = $result['female_count'];
        }
        return $male_count.' '.$female_count;
    }

    public function connect_db()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=discipleship", "root", "");
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public function get_marital_stats(){
        $married_count = null;
        $engaged_count = null;
        $single_count = null;
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as married_count FROM disciples WHERE marital_status = :married');
        $married = 'Married';
        $statementHandler->bindParam(':male', $married);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $married_count = $result['married_count'];
        }
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as engaged_count FROM disciples WHERE marital_status = :engaged');
        $engaged = 'Engaged';
        $statementHandler->bindParam(':engaged', $engaged);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $engaged_count = $result['engaged_count'];
        }
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as single_count FROM disciples WHERE marital_status = :single');
        $single = 'Single';
        $statementHandler->bindParam(':single', $single);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $single_count = $result['single_count'];
        }
        return $married_count.' '.$engaged_count.' '.$single_count;
    }

    public function get_member_stats()
    {
        $yes_count = null;
        $no_count = null;
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as members FROM disciples WHERE member = :yes');
        $yes = 'yes';
        $statementHandler->bindParam(':yes', $yes);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $yes_count = $result['members'];
        }
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as non_members FROM disciples WHERE member = :no');
        $no = 'no';
        $statementHandler->bindParam(':no', $no);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $no_count = $result['non_members'];
        }
        return $yes_count . ' ' . $no_count;
    }

    public function get_submitted_stats()
    {
        $yes_count = null;
        $no_count = null;
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as submitted FROM disciples WHERE submitted = :yes');
        $yes = 'yes';
        $statementHandler->bindParam(':yes', $yes);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $yes_count = $result['submitted'];
        }
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as non_submitted FROM disciples WHERE submitted = :no');
        $no = 'no';
        $statementHandler->bindParam(':no', $no);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $no_count = $result['non_submitted'];
        }
        return $yes_count . ' ' . $no_count;
    }

    public function get_leader_stats()
    {
        $yes_count = null;
        $no_count = null;
        $dbh = $this->connect_db();
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as leaders FROM disciples WHERE leader = :yes');
        $yes = 'yes';
        $statementHandler->bindParam(':yes', $yes);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $yes_count = $result['leaders'];
        }
        $statementHandler = $dbh->prepare('SELECT COUNT(id) as non_leaders FROM disciples WHERE leader = :no');
        $no = 'no';
        $statementHandler->bindParam(':no', $no);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $no_count = $result['non_leaders'];
        }
        return $yes_count . ' ' . $no_count;
    }
} 