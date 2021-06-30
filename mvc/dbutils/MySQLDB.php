<?php
class MySQLDB{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '123456';
    private $dbname = 'QLSV';
    protected $conn;
    public function  __construct()
    {
        $constr = "mysql:host=$this->host;dbname=$this->dbname";
        $this->conn = new PDO($constr, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
?>