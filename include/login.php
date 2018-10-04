<?php 
include('../core/init.php');
if (isset($_POST['login'])) {
    $usernameorphone = $getFromU->checkUserInput($_POST['emailorphone']);
    $password = $getFromU->checkUserInput($_POST['password']);

    $user = $getFromU->login_user($usernameorphone,$password);     
    if($usernameorphone === $user->emailorphone and $password === $user->password ){
        $_SESSION['id'] = $user->id;
        header('Location:../home.php');
    }else{
        
    }

}
?>