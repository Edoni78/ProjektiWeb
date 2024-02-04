<?php
include_once 'databaseconnection.php';

class UserRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertUser($user) {
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO accounts (id, name, surname, email, password, role) VALUES (?, ?, ?, ?, ?, ?)";

        try {
            $statement = $conn->prepare($sql);
            $statement->execute([$id, $name, $surname, $email, $password, 'user']);
            echo "<script> alert('Youre account has been registered successfully!'); </script>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM accounts";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM accounts WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id, $name, $surname, $email, $password, $role){
        $conn = $this->connection;
    
        $sql = "UPDATE accounts SET name=?, surname=?, email=?, password=?, role=? WHERE id=?";
    
        try {
            $statement = $conn->prepare($sql);
            $statement->execute([$name, $surname, $email, $password, $role, $id]);
            echo "<script>alert('Update was successful');</script>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

   function deleteUser($id){
    $conn = $this->connection;

    $sql = "DELETE FROM accounts WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 
function getUserByName($name, $surname, $password) {
    $conn = $this->connection;

    $sql = "SELECT * FROM accounts WHERE name = ? AND surname = ? AND password = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$name, $surname, $password]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    return $user;
}
}
?>
