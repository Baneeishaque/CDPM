<?php
session_start();
include 'config.php';
$uname=$_SESSION["user_id"];

            mysql_query("UPDATE `service`.`user`
SET
`name` = '".$_GET['unn']."',
`mobile` = '".$_GET['mobb']."',
`email` = '".$_GET['eidd']."'
WHERE userid='".$uname."';");
            
            echo '<script>alert("Updation Success...")</script> ';
        echo '<script>window.location="profile.php"</script>';
        
     