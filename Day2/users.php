<?php
$users=convert_file_to_array();
$key=array("submit_date:","Ip address:","name:","email:","Message:");
foreach($users as $user){
    $user_details=explode(",",$user);
    echo "<h3>New user</h3>";
    echo "<div>";
    $i=0;
    foreach($user_details as $value){
        echo "<h3>$key[$i] $value </h3>";
        $i=$i+1;
    }
    echo str_repeat("*", 20);
    echo "</div>";
} 
?>