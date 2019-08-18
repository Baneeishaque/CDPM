<?php

function print_nav($active_tab) {
    echo '
<li ';
    if ($active_tab == 'Home') {
        echo 'class=\'current\'';
    }
    echo '>
    <a href="index.php"><b>Home</b></a></li>
        
<li ';


    if ($active_tab == 'Log in') {
        echo 'class=\'current\'';
    }
    echo '>
            <a href="login.php"><b>Log in</b></a></li>
      
        
<li ';
    if ($active_tab == 'Registration') {
        echo 'class=\'current\'';
    }
    echo '>
            <a href="registration.php"><b>Registration</b></a></li>
        </li>';
}
