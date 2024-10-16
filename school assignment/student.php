<?php
    require_once 'dbcon.php';
class Student extends Database{
    private $name;
    private $age;
    private $class;
    private $email;
    private $gd_yr;
    private $conn;

    public function __construct($name=null, $age=null, $class=null,$email=null,$gd_yr=null)
    {
        $this->conn=$this->connect();
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;
        $this->email=$email;
        $this->gd_yr=$gd_yr;

}

public function addstudents(){
    $query="INSERT INTO `students`(name,age,class,email,gd_yr)VALUES(:name,:age,:class,:email,:gd_yr)";
    $stmt=$this->conn->prepare($query);
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":age", $this->age,type:PDO::PARAM_INT);

    $stmt->bindParam(":class", $this->class);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":gd_yr", $this->gd_yr);
    return $stmt->execute();
}

public function getStudents(){
    $query= "SELECT * FROM `students`";
    $stmt=$this->conn->prepare($query);
    if($stmt->execute()){
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        return false;
    }

}

public function getStudent($id){
    $query= "SELECT * FROM `students` WHERE `id`=:id";
    $stmt=$this->conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    if($stmt->execute()){
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        return false;
    }


}

public function updateStudents($id){
  $query = "UPDATE `students` SET `name` = :name, `age` = :age, `class` = :class, `email` = :email ,`gd_yr`=:gd_yr WHERE `id` = :id";
$stmt=$this->conn->prepare($query);
$stmt->bindParam("id", $id, PDO::PARAM_INT);
$stmt->bindParam("name", $this->name);
    $stmt->bindParam("age", $this->age,PDO::PARAM_INT);
    $stmt->bindParam("class", $this->class,PDO::PARAM_INT);
    $stmt->bindParam("email", $this->email);
    $stmt->bindParam(":gd_yr", $this->gd_yr);

    return $stmt->execute();
}

public function deleteStudent($id){
    $query="DELETE  FROM students  WHERE `id`=:id";
    $stmt=$this->conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    return $stmt->execute();
  
}
}

?>