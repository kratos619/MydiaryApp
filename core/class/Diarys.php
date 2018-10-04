<?php 
class Diarys{
      
    protected $pdo ;
     
    function __construct($pdo){
           $this->pdo = $pdo; 
    }


    public function checkUserInput($var){
         $var  = htmlspecialchars($var);
         $var = stripcslashes($var);
         return $var;   
    }

    public function create_day($user_id,$day){
      $stmt = $this->pdo->prepare('INSERT INTO days (user_id ,HowsYourday) VALUES (:user_id,:HowsYourday)');
      $stmt->bindParam(":user_id",$user_id);
      $stmt->bindParam(":HowsYourday",$day,PDO::PARAM_STR);
      $stmt->execute();
    }

     public function view_all_days($user_id){
     $stmt = $this->pdo->prepare('select * from days where user_id= :user_id');
     $stmt->bindParam(":user_id",$user_id,PDO::PARAM_INT);
      $stmt->execute();
     return  $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function find_day_by_id($id){
      $stmt = $this->pdo->prepare("select * from days where id = :id");
      $stmt->bindParam(":id",$id,PDO::PARAM_INT);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update_day($status,$day,$id){
      $stmt = $this->pdo->prepare("update days set status=:status , HowsYourday=:HowsYourday where id = :id");
      $stmt -> bindParam(":status",$status,PDO::PARAM_STR);
      $stmt -> bindParam(":HowsYourday",$day,PDO::PARAM_STR);
      $stmt -> bindParam(":id",$id,PDO::PARAM_INT);
      $stmt -> execute();
      return true;
    }

    public function select_days_public($public){
      $stmt = $this->pdo->prepare("select * from days where status = :public");
      $stmt->bindParam(":public",$public,PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

?>