<?php 
    require_once('../app/user.php');
    $user = new User();
    if(isset($_POST['submit'])){  
        if($_POST['password'] != $_POST['cf_password']){
            session_start();
            $_SESSION['msg'] = "Password is not match";
            header("Location: $user->baseUrl");            
        }else{
            $username = $_POST['username'];
            $password = md5($_POST['password']);            
            $role = "pembeli";
            $user->addUser($username, $password, $role);
        }        
    }
?>