<?php


    require_once 'config.php';

mysql_query("UPDATE `service`.`files`
SET `status` = 1
WHERE `idfiles` = ".$_GET['id'].";
");

mysql_query("UPDATE `service`.`report`
SET `status` = 1
WHERE `fileid` = ".$_GET['id'].";
");
 echo '<script>alert("Deleted Successfully...!")</script> ';

   echo '<script>window.location="admin_files.php"</script>';
        