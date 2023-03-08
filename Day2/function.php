<?php 
function remember_Variable($var){
    if(isset($_POST[$var])&&!empty($_POST[$var])){
        return $_POST[$var];
}}
function save_to_file(){
    $fp=fopen(_Saving_File_,"a+");
    $submit_date=date("F j Y g:i a");
    $submit_date.= ",";
    $ip = $_SERVER['REMOTE_ADDR'];  
    $ip.= ",";
    $written_string=implode(",",$_POST);
    fwrite($fp,$submit_date);
    fwrite($fp,$ip);
    fwrite($fp,$written_string.PHP_EOL);
    fclose($fp);
}
function convert_file_to_array(){
    return file(_Saving_File_);
}
?>