<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Finance</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Finance Management</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="signup.php" method="post">
                    <h2>User Table</h2><br>

        <?php

                $res=mysqli_query($link, "SELECT * FROM user");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                
                                echo "<th>"; echo "User Name"; echo "</th>";
                                echo "<th>"; echo "Name"; echo "</th>";
                                echo "<th>"; echo "Address"; echo "</th>";
                                echo "<th>"; echo "Mobile"; echo "</th>";
       
                                echo "</tr>";
                                
                                while ($row=mysqli_fetch_array($res)) {
                                echo "<tr>";
                              
                                echo "<td>"; echo $row["UserName"]; echo "</td>";
                                echo "<td>"; echo $row["name"]; echo "</td>";
                                echo "<td>"; echo $row["Address"]; echo "</td>";
                                echo "<td>"; echo $row["Mobile"]; echo "</td>";

                                echo "</tr>";
                                }
                                
                                echo "</table>";
            

?>

</form>
</section>



                            </div>
                     