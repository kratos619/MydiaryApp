<?php 
include ('../core/init.php');
if(isset($_POST['register'])){
    $first_name = $getFromU->checkUserInput($_POST['firstname']);
    $last_name = $getFromU->checkUserInput($_POST['lastname']);
    $email_or_phone = $getFromU->checkUserInput($_POST['emailorphone']);
    $password = $getFromU->checkUserInput($_POST['password']);
    $dob = $_POST['dob'];
    $result = $getFromU->register_user($first_name,$last_name,$email_or_phone,$password,$dob);
if($result){
    echo "insert user";
    header("Location: ../index.php");
}else{
    echo "errror";
}
    
}
?>