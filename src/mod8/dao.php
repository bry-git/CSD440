<?php
class DAO {
    private $host = "127.0.0.1";
    private $username = "mstudent1";
    private $password = "pass";
    private $database = "baseball_01";
    private $conn;

    public function __construct() {

        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function create_table() {
        $sql = "CREATE TABLE baseball_teams (
                team_id INT PRIMARY KEY,
                team_name VARCHAR(50) NOT NULL,
                city VARCHAR(50) NOT NULL,
                founded_year INT,
                coach_name VARCHAR(50)
                )";
        try {
            $result = $this->conn->query($sql);
            if (!$result) {
                throw new Exception("query failed");
            }
        } catch (Exception $e) {
            $err_msg = $e->getMessage();
            throw new Exception($err_msg);
        }
    }

    public function drop_table() {
        $sql = "DROP TABLE baseball_teams;";
        try {
            $result = $this->conn->query($sql);
            if (!$result) {
                throw new Exception("query failed");
            }
        } catch (Exception $e) {
            $err_msg = $e->getMessage();
            throw new Exception($err_msg);
        }
    }

    public function create_team($teamName, $city, $foundedYear = null, $coachName = null) {
        $sql = "INSERT INTO baseball_teams (team_name, city, founded_year, coach_name) 
                VALUES ($teamName, $city, $foundedYear, $coachName);";
        try {
            $result = $this->conn->query($sql);

            if (!$result) {
                throw new Exception("Team creation failed");
            }
        } catch (Exception $e) {
            $err_msg = $e->getMessage();
            throw new Exception($err_msg);
        }
    }

}