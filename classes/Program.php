<?php

class Program{
	protected $_number;
	protected $_date;
	protected $_status;

	public function get_number(){return $this->_number;}
	public function get_date(){return $this->_date;}
	public function get_status(){return $this->_status;}

	public function set_number($number){$this->_number = $number;}
	public function set_date($date){$this->_date = $date;}
	public function set_status($status){$this->_status = $status;}

	public function Program($number,$date,$status){
		$this->_number = $number;
		$this->_date = $date;
		$this->_status = $status;

	}
	
	public function add_program(){
		$dbh = $this->connectDB();
		$statementHandler = $dbh->prepare('INSERT INTO programs VALUES(:id,:prog_number,:prog_date,:prog_status)');
		$id = '';
		$statementHandler->bindParam(':id',$id);
		$statementHandler->bindParam(':prog_number',$this->_number);
		$statementHandler->bindParam(':prog_date',$this->_date);
		$statementHandler->bindParam(':prog_status',$this->_status);
        $result = $statementHandler->execute();
        if($result) {
            return $result;
        }
        return false;
	}

	public function connectDB()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=discipleship", "root", "patrick");
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
}