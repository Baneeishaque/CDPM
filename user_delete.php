<?php


    require_once 'config.php';

mysql_query("DELETE FROM `service`.`files`
WHERE `idfiles` = ".$_GET['id'].";
");

mysql_query("DELETE FROM `service`.`report`"
        . "WHERE `fileid` = ".$_GET['id'].";
");
 echo '<script>alert("Deleted Successfully...!")</script> ';

   echo '<script>window.location="user_files.php"</script>';
        