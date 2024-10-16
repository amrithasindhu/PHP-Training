<?php
require_once("dbcon.php"); 

class Student extends Database {
    private $name;
    private $age;
    private $clas;
    private $email;
    private $conn;

    public function __construct($name = null, $age = null, $class = null, $email = null) {
        $this->conn = $this->connect();
        $this->name = $name;
        $this->age = $age;
        $this->clas = $class;
        $this->email = $email;
    }

    public function addStudent() {
        $query = "INSERT INTO `students`(`name`, `age`, `class`, `email`) VALUES (:name, :age, :class, :email)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':age', $this->age, PDO::PARAM_INT);
        $stmt->bindParam(':class', $this->clas);
        $stmt->bindParam(':email', $this->email);

        return $stmt->execute();
    }

    public function getAllStudents() {
        $query = "SELECT * FROM `students`";
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

 



    public function getStudentById($id) {
        $query = "SELECT * FROM `students` WHERE `id` = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function updateStudent($id) {
        $query = "UPDATE `students` SET `name` = :name, `age` = :age, `class` = :class, `email` = :email WHERE `id` = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':age', $this->age, PDO::PARAM_INT);
        $stmt->bindParam(':class', $this->clas);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function deleteStudent($id) {
        $query = "DELETE FROM `students` WHERE `id` = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}
?>
