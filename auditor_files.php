
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
        include_once 'title.php';
        ?>

        <link href="style.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div id="container">  	  
            <div id="header">

                <div id="logo"> 

                    <div style="position:absolute; left:36px;  top:80px;"> 
                        <div align="left"><font color="#FFFFFF" size="5"><storng><b><?php
                                    include_once 'head_auditor.php';
                                    ?></b></strong></font> </div>
                    </div>
                </div>

                <div id="menu">
                    <ul>
                        <?php
                        include_once 'navigation_auditor.php';
                        print_nav("Files");
                        ?>
                    </ul>
                </div>
                <div class="cleaner"></div>
            </div>

            <div id="content_area_top">
            </div>

            <div class="box"> <br>
                <br>
                <br>
                <br>
                <br>

                <div style="position:absolute; left:246px;  top:10px;"> 

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <strong><em><font color="#990000" size="+1" face="Times New Roman"  
	  style="text-decoration:underline">User Files</font></em></strong> 
        <br/>
        <br>

                    <table align="center" >
                         <tr> 
            <td bgcolor="#CCCCCC"><font face="Times New Roman" size="+1"><strong>Name</strong></font></td>
            <td bgcolor="#CCCCCC"><font face="Times New Roman" size="+1"><strong>Upload Date</strong></font></td>
            <td bgcolor="#CCCCCC"><font face="Times New Roman" size="+1"><strong></strong></font></td>
            <td bgcolor="#CCCCCC"><font face="Times New Roman" size="+1"><strong></strong></font></td>
            <td bgcolor="#CCCCCC"><font face="Times New Roman" size="+1"><strong></strong></font></td>
          </tr>
                        <?php
                        include 'connection.php';
                        $sql = "SELECT * FROM files where status=0 order by idfiles desc";
                        $result = $conn->query($sql);
                    
                        while ($row = $result->fetch_assoc()) {


                           
         
          echo '<tr> 
            <td bgcolor="#CCFFFF"> ' . $row["title"] . '
      
            </td></td>
            <td bgcolor="#CCFFFF"> ' . $row["date"] . '
 
            </td>
            <td bgcolor="#CCFFFF"> <a href="files/' . $row["name"] . '">View</a> 
            </td>
             <td bgcolor="#CCFFFF"> <a href="auditor_pass.php?id=' . $row["idfiles"] . '&file=' . $row["title"] . '">Pass</a> 
            </td>
            <td bgcolor="#CCFFFF"> <a href="auditor_report.php?id=' . $row["idfiles"] . '&file=' . $row["name"] . '&title=' . $row["title"] . '">Report</a> 
            </td>
           
           </tr>';
                        }
                        ?>

                    </table>

                    <!-- Primary content area end -->
                </div>
                <div class="cleaner">


                </div>
            </div><!-- End Of Content area top -->




            <div id="footer">


            </div><!-- End Of Container -->


    </body>
</html>