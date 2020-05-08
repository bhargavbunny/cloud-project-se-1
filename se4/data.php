
<?php

function get_M_name($Technology, $M_name)
{
        /* Database INFO */
	$servername = "us-cdbr-east-06.cleardb.net";
	$username = "b877505a0f88cc";
	$password = "a9022248";
	$dbname = "heroku_55bbd09e4d7e27d";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT Manager_name FROM manager WHERE Technology = '$Technology'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["Manager_name"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $M_name) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>



