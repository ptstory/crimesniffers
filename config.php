<!DOCTYPE html>
<html>
    <body>

        <?php
        /*
echo 'Current PHP version: ' . phpversion();
*/
        ?>

        <?php
            $host = "mysql-crimesniffers.cnurcb2fxz0x.us-east-2.rds.amazonaws.com";
            $username = "admin";
            $pwd = "crimesniffers123";
            $db_name="crimesniffers";
        
        

            
            // $conn = mysqli_connect("$host", "$username", "$pwd");
            $conn = mysql_connect("$host", "$username", "$pwd");

            /*
            mysql_select_db("$db_name");
            */
            
            /*
            if (!$conn) {
                    die("Cannot connect to server");
            } else {
                    mysql_select_db("$db_name");
                    echo "connection established";
            }
            */

            mysql_select_db("$db_name");
            // mysqli_select_db($conn, $db_name);

            
            /*
        $sql = "SELECT * FROM crime";
        $result = mysql_query($sql);
        if(mysql_num_rows($result)>0) {
            while($row = mysql_fetch_assoc($result))
            {
            $offid = $row["offense_id"];
            $numvict = $row["num_of_victims"];

            echo "<pre>$offid   $numvict</pre>";
            }
        }

            mysql_select_db("$db_name");
            $sql = "SELECT * FROM user";
            $result = mysql_query($sql);
            if(mysql_num_rows($result)>0) {
                while($row = mysql_fetch_assoc($result))
                {
                    $pwd=$row["password"];
                    $un=$row["username"];
                    $nm=$row["name"];
                    echo $un;
                    echo $pwd;
                    echo $nm;
                }
            }
            */
            
        ?>
    </body>
</html>