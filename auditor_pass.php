<?php


    require_once 'config.php';
$id=$_GET['id'];

     mysql_query("UPDATE `service`.`files`
SET `status` = 2
WHERE `idfiles` = ".$_GET['id'].";
");
 
   


    echo '<script>alert("Passed Successfully...!")</script> ';

   echo '<script>window.location="auditor_files.php"</script>';

   