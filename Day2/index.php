<?php 
require_once('config.php');
require_once('function.php');
// var_dump($_POST["name"]);
$error= "";
$nameErr= "";
$emailErr="";
$msgErr="";
if(!empty($_POST)){
    $name=isset($_POST["name"])?$_POST["name"]:"";
    $email=isset($_POST["email"])?$_POST["email"]:"";
    $message=isset($_POST["message"])?$_POST["message"]:"";
    $submit_date=date("F j Y g:i a");
    if(empty($name)||empty($email)||empty($message)){
        $error="there is a field or more is empty";
    }
    elseif(strlen($name)>__MAX_NAME_Length_){
    $nameErr= "the max length of name is 100 characters";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr="please enter a valid email address";
    }
    elseif(strlen($message)>_MAX_LENGTH_MSG){
        $msgErr= "the max length of message is 255 characters";    
    }
    else{
        save_to_file();
        die("<h3>".__Thank_You_."</h3>"
        ."Your sent data is"."<br/>"
        ."name= $name"."<br/>"
        ."email= $email"."<br/>"
        ."message= $message"."<br/>"
        );
    }
}
$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "contact")
    require_once("contact.php");
else
    require_once("users.php");

?>