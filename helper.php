<?php
function inputError($name){
    if (isset($_SESSION['errors'][$name])) {
        return $_SESSION['errors'][$name];
    }else{
        return false;
    }
}
function old($name,$data=''){
    if (isset($_SESSION['data'][$name])) {
        return $_SESSION['data'][$name];
    }
    if($data != ''){
       return $data;
    }
}
function sessionError($name,$messge){
    return $_SESSION['errors'][$name] = $messge;
}