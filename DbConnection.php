<?php
class DbConnection {
	private $host ='localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'mahasiswa';
	protected $connection;
	public function__contruct(){
		if(!isset($this->connection)){
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			id(!$this->connection){
				echo "Cannot connect to database server";
				exit;
			}
		}
	return $this->connection;
	}
}
?>