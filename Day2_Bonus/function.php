<?php
function read_from_file(){
$fp=fopen(_saving_file_,"r+");
$read_str=fread($fp,filesize(_saving_file_));
    fclose($fp);
    return $read_str;
}
$user=read_from_file();
$user_details=explode(",",$user);
$user_email= $user_details[0];
$user_password= $user_details[1];
function authenticated($user_email,$user_password){
    if($user_email == $_SESSION["email"] && $user_password == $_SESSION["password"]){
        $_SESSION["loginStatue"]= true;
        authorized();
    }
    else{
        echo "error login, check your email and password";
    }
}
function authorized(){
    if(isset($_SESSION["loginStatue"] ) ==true ){
        var_dump($_SESSION["loginStatue"]);
        header("Location: authentication.php");
        exit();
    }
    else{
        header("Location: login.php");
        exit();
    }
}