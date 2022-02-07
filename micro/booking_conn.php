<html><body>
  <style>
    body{
        background-image: url("../images/bg4.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    </style></body></html>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourism";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $userid= $_POST['userid'];
    $packageid=$_POST['packageid'];
    $calender=$_POST['calender'];
    $sql = "INSERT INTO booking (`userid`, `packageid`, `calender`)
    VALUES ('$userid', '$packageid', '$calender')";

   
    
    
      
    if ($con->query($sql) === TRUE) {
      echo "Booking successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>
<button><a href="cushome.php">GO TO HOME</a></button>