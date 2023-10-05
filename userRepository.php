<?php 

include_once 'databaseconnections.php';

class UserRepository{
    private $connection;
    
    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    } 

    function insertUser($user){
        $conn = $this->connection;

        $id=$user->getId();
        $firstname=$user->getFirstname();
        $lastname=$user->getLastname();
        $email=$user->getEmail();
        $password=$user->getPassword();

        $sql = "INSERT INTO user (id,firstname,lastname,email,password) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$firstname,$lastname,$email,$password]);
        
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }
    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }
}


?>