<?php

function print_nav($active_tab) {
    echo '
<li ';
    if ($active_tab == 'Files') {
        echo 'class=\'current\'';
    }
    echo '>
    <a href="admin_files.php"><b>Reported Files</b></a></li>
        
<li ';


    if ($active_tab == 'Users') {
        echo 'class=\'current\'';
    }
    echo '>
            <a href="admin_users.php"><b>Users</b></a></li>
      
        
<li >
            <a href="index.php"><b>Log out</b></a></li>
        </li>';
}
