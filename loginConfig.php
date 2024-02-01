<?php 
    require_once 'databaseConnection.php';

    class loginConfig {
        private $name;
        private $surname;
        private $password;
        private $role = 'user'; 
      
        function __construct($name, $surname, $password) {
            $this->name = $name;
            $this->surname = $surname;
            $this->password = $password;
            
        }

      
        function getName() {
            return $this->name;
        }
      
        function getSurname() {
            return $this->surname;
        }
      
        function getPassword() {
            return $this->password;
        }
      
        function getRole() {  
            return $this->role;
        }

        function fetchAll($dbConnection) {
            
            $sql = "SELECT * FROM accounts";
            $stmt = $dbConnection->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $loginConfigs = [];
            foreach ($result as $row) {
                $loginConfig = new LoginConfig($row['name'], $row['surname'], $row['password']);
                $loginConfigs[] = $loginConfig;
            }
    
            return $loginConfigs;
        }
        
    }
?>