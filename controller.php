<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = 'admin@gmail.com';
    $pw = '123456';
    $errors = array();
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $regexEmail = '/^[a-zA-Z0-9]+@[a-zA-z\d]+\.[a-zA-Z\d]+.[a-zA-Z\d]*$/';
        if (empty($email)) {
            $errors['email'] = 'trường email không đc bỏ trống';
        }
        elseif (preg_match($regexEmail, $email) == false) {
            $errors['email'] = 'trường email không đúng định dạng';
        }
        elseif($email != $username){
            $errors['email'] = 'trường email sai';
        }

    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if (empty($password)) {
            $errors['password'] = 'trường password không đc bỏ trống';
        } elseif (strlen($password) < 6) {
            $errors['password'] = 'trường password phải lớn hơn 6 kí tự';
        } elseif (strlen($password) > 20) {
            $errors['password'] = 'trường password phải nhỏ hơn 20 kí tự';
        }elseif ($password != $pw){
            $errors['password'] = 'trường password sai';
        }
    }
    if (count($errors) == 0) {
        $user = [
            'name' => 'Nguyen thi Quyen',
            'age' => 19
        ];
        $_SESSION['user'] = $user;
        header('location: success.php');
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $_POST;
        header('location: index.php');
    }

}
