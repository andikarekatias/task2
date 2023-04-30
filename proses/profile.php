<?php 
    require_once('../app/buyer.php');
    $buyer = new Buyer();
    session_start();
    if(isset($_POST['submit'])){  
        $email = $_POST['email'];
        $query = mysqli_query($buyer->koneksi,"SELECT * FROM buyers WHERE email = '$email'") or die("Error");
        $result = mysqli_fetch_array($query);
        if($_POST['email'] == $result['email']){
            session_start();
            $_SESSION['msg'] = "Email already exists";
            header("Location: $user->baseUrl?url=profile");            
        }else{
            $id_u = $_SESSION['id_user'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address =  $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $cc = $_POST['cc'];
            $month_exp = $_POST['month_exp'];
            $year_exp = $_POST['year_exp'];
            $buyer->addBuyer($id_u,$name,$email,$address,$city,$state,$zip,$cc,$month_exp,$year_exp);
        }        
    }
?>