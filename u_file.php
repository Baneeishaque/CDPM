<?php

    session_start();
    include 'connection.php';
    $uid = $_SESSION["user_id"];
    $tittle = $_POST['fn'];
    $date = date("d-M-Y");
    $file = $_FILES['file']['name'];


    $uploaddir = 'files/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if (!(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))) {
        echo '<script>

					alert("Upload Failure");

				</script>
				';
    } else {
        $sql = "INSERT INTO `files`(`title`,`date`, `name`,`user`) VALUES ('$tittle','$date','$file','$uid')";
     
        $conn->query($sql);

        echo '<script>alert("Upload Success...")</script> ';
        echo '<script>window.location="file_upload.php"</script>';
    }
