<?php
session_start();
//var_dump($_SERVER);

if ($_SERVER["REQUEST_METHOD"]="POST"){
    $errs=array();
    if (isset($_POST['email'])){
       $email= $_POST['email'];
       if (empty($email)){
           $errs['email'] = "Trường email không được bỏ trống";
       }
    }
    if (isset($_POST['password'])){
        $password= $_POST['password'];
        if (empty($password)){
            $errs['password'] = "Trường password không được bỏ trống";
        }
    }
    if (count($errs)==0){
        header("location: success.php");
}
    }else{
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    header('location: login.php');
}

