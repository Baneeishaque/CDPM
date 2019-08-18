<?php

function print_nav($active_tab) {
    echo '
<li ';
    if ($active_tab == 'Files') {
        echo 'class=\'current\'';
    }
    echo '>
    <a href="auditor_files.php"><b>User Files</b></a></li>
        
<li >
            <a href="index.php"><b>Log out</b></a></li>
        </li>';
}
