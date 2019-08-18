<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_key($userid) {
  
    
    include 'config.php';
    $u=null;
    $result = mysql_query("SELECT * FROM `user` WHERE `userid`='".$_GET["unn"]."'");
    $row = mysql_fetch_array($result);
    $u = $row["userid"];
    if ($u == null) {
        return $_GET["unn"];
    } else {
        return $_GET["unn"].rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    }
}
