<?php

function print_nav($active_tab) {
    echo '
<li ';
    if ($active_tab == 'Files') {
        echo 'class=\'current\'';
    }
    echo '>
    <a href="user_files.php"><b>Files</b></a></li>
        
<li ';


    if ($active_tab == 'Upload File') {
        echo 'class=\'current\'';
    }
    echo '>
            <a href="file_upload.php"><b>Upload File</b></a></li>
      
        
<li ';
   
    if ($active_tab == 'Profile') {
        echo 'class=\'current\'';
    }
    echo '>
            <a href="profile.php"><b>Profile</b></a></li>
        </li>
    <li >
            <a href="index.php"><b>Log out</b></a></li>
        </li>';
}
