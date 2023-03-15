<?php 
require_once("config.php");
require_once("function.php");
session_start();

if (isset($_POST["submit"])){
$email=isset($_POST["email"])?$_POST["email"]:"";
$password=isset($_POST["password"])?$_POST["password"]:"";
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
authenticated($user_email,$user_password);
// authorized();
}

$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "login")
    require_once("login.php");
else
    require_once("authentication.php");
?>