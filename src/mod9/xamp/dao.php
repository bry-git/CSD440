<?php

require_once 'BaseballTeam.php';

class DAO {
    private $host = "mod9-database";
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

    /*
     * currently created by container, do not use
     */
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

    /*
     * for demonstration only, will break application
     */
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

    public function create_team($teamName, $city, $foundedYear, $coachName) {
        $sql = "INSERT INTO baseball_teams (team_name, city, founded_year, coach_name) 
                VALUES ('$teamName', '$city', '$foundedYear', '$coachName');";
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

    private function generic_read_operation(string $sql): array
    {
        $teams = [];
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $teams[] = new BaseballTeam(
                    $row['team_id'],
                    $row['team_name'],
                    $row['city'],
                    $row['founded_year'],
                    $row['coach_name']
                );
            }
        }
        return $teams;
    }

    public function list_teams() {
        $sql = "SELECT * FROM baseball_teams;";
        return $this->generic_read_operation($sql);
    }

    public function search_teams_by_city(string $city_search_string) {
        $sql = "SELECT * FROM baseball_teams WHERE city LIKE '%$city_search_string%';";
        return $this->generic_read_operation($sql);
    }

    public function search_teams_by_team_name(string $name_search_String) {
        $sql = "SELECT * FROM baseball_teams WHERE team_name LIKE '%$name_search_String%';";
        return $this->generic_read_operation($sql);
    }



}