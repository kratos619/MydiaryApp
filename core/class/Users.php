<?php 
class Users
{
      protected $pdo ;
     
    function __construct($pdo){
           $this->pdo = $pdo; 
    }
    
    public function checkUserInput($var){
         $var  = htmlspecialchars($var);
         $var = stripcslashes($var);
         return $var;   
    }

    
    public function register_user($fname,$lname,$emailorphone,$password,$dob){
      $stmt = $this->pdo->prepare('INSERT INTO users (first_name ,last_name,emailorphone,password,dob) VALUES (:fname,:lname,:emailorphone,:password,:dob)');
      $stmt->bindParam(":fname",$fname,PDO::PARAM_STR);
      $stmt->bindParam(":lname",$lname,PDO::PARAM_STR);
      $stmt->bindParam(":emailorphone",$emailorphone,PDO::PARAM_STR);
      $stmt->bindParam(":dob",$dob);
      $stmt->bindParam(":password",$password,PDO::PARAM_STR);
      if(!$stmt->execute()){
      return false;
      }
      return true;
    }

    public function login_user($email,$password){
        $stmt = $this->pdo->prepare("select * from users where emailorphone = :emailorphone and password = :password");
        $stmt->bindParam(":emailorphone",$email,PDO::PARAM_STR);
        $stmt->bindParam(":password",$password,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    



}

?>