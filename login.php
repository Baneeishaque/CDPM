<?php
if (isset($_GET['s'])) {

    require_once 'config.php';

    $uname = mysql_escape_string($_GET['uid']);
    $pass = mysql_escape_string($_GET['pass']);
    $role = mysql_escape_string($_GET['Role']);
    if ($role == 'User') {

        $result = mysql_query("SELECT name FROM `user` WHERE `userid`='$uname' and `pass`='$pass'");

        $row = mysql_fetch_array($result);
        $status = $row['name'];

        if ($status == null) {

            echo '<script>alert("Invalid User...!")</script> ';
        } else {
            session_start();
            $_SESSION["user_id"] = $uname;
            header("Location: user_files.php"); /* Redirect browser */
            exit();
        }
    } else {
        if ($role == 'Administrator') {
            $result = mysql_query("SELECT userid FROM `admin` WHERE `userid`='$uname' and `pass`='$pass'");

            $row = mysql_fetch_array($result);
            $status = $row['userid'];

            if ($status == null) {

                echo '<script>alert("Invalid User...!")</script> ';
            } else {
                header("Location: admin_files.php"); /* Redirect browser */
                exit();
            }
        } else {

            if ($role == 'Auditor') {
                $result = mysql_query("SELECT userid FROM `tpa` WHERE `userid`='$uname' and `pass`='$pass'");

                $row = mysql_fetch_array($result);
                $status = $row['userid'];

                if ($status == null) {

                   echo '<script>alert("Invalid User...!")</script> ';
                } else {
                    header("Location: auditor_files.php"); /* Redirect browser */
                    exit();
                }
            }
        }
    }
}
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
        include_once 'title.php';
        ?>

        <link href="style.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript">
            function clearText(field)
            {
                if (field.defaultValue == field.value)
                    field.value = '';
                else if (field.value == '')
                    field.value = field.defaultValue;
            }
        </script>
        <script type="text/javascript">

            function valid()
            {
                var a = document.s.uid.value;
                if (a == "")
                {
                    alert("Enter User ID");
                    document.s.uid.focus();
                    return false;
                }
                var b = document.s.pass.value;
                if (b == "")
                {
                    alert("Enter Password");
                    document.s.pass.focus();
                    return false;
                }


            }

        </script>
    </head>
    <body>
        <div id="container">  	  
            <div id="header">

                <div id="logo"> 

                    <div style="position:absolute; left:36px;  top:80px;"> 
                        <div align="left"><font color="#FFFFFF" size="5"><storng><b><?php
                                    include_once 'head.php';
                                    ?></b></strong></font> </div>
                    </div>
                </div>

                <div id="menu">
                    <ul>
                        <?php
                        include_once 'navigation_main.php';
                        print_nav("Log in");
                        ?>
                    </ul>
                </div>
                <div class="cleaner"></div>
            </div>

            <div id="content_area_top">
            </div>

            <div class="box"> <br>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><font color="#990000" size="+1" face="Times New Roman" 
                                                                style="text-decoration:underline">Login</font></strong> <br/>
                    <br>
                <form name="s" action="login.php" method="get" onsubmit="return valid()">
                    <table align="left" width="400" height="200" background="images/02.jpg">
                        <tr> 
                            <td><font face="Times New Roman" size="+1"><strong><img src="images/Users.png" width="30" height="30">&nbsp;&nbsp;User 
                                    ID</strong></font></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="uid" class="b"></td>
                        </tr>
                        <tr> 
                            <td><font face="Times New Roman" size="+1"><strong><img src="images/bs.png" width="30" height="30">&nbsp;&nbsp;Password</strong></font></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="pass" class="b"></td>
                        </tr>
                        <tr> 
                            <td><font face="Times New Roman" size="+1"><strong><img src="images/key.png" width="30" height="30">&nbsp;&nbsp;Role</strong></font></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp; <select name="Role">
                                    <option>User</option>

                                    <option>Auditor</option>
                                    <option>Administrator</option>
                                </select></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="s" value="submit" class="b1" > 
                                &nbsp; <input type="reset" name="r" value="clear" class="b1"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div style="position:absolute; left:650px;  top:265px;"> 
                <img src="images/ccc.png" width="340" height="180"></div>
            <!-- Primary content area end -->
        </div>
        <div class="cleaner">


        </div>
    </div><!-- End Of Content area top -->




    <div id="footer">


    </div><!-- End Of Container -->


</body>
</html>