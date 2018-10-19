<!DOCTYPE html>
<html>
    <body>

        <?php



            $host = "mysql-crimesniffers.cnurcb2fxz0x.us-east-2.rds.amazonaws.com";
            $username = "admin";
            $pwd = "crimesniffers123";
            $db_name="crimesniffers";
        
        

            
            // $conn = mysqli_connect("$host", "$username", "$pwd");
            $conn = mysql_connect("$host", "$username", "$pwd");

         

            mysql_select_db("$db_name");
            // mysqli_select_db($conn, $db_name);
            ?>