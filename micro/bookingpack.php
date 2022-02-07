<html><body>
<style>
    body{
        background-image: url('./img3.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
    <?php
    $userid=$_POST['userid'];
    ?>
<?php
$conn=mysqli_connect("localhost", "root", "", "tourism");

if(!$conn)
{
    die("Error: Failed to connect to database!"); 
}
$packageid=$_POST['packageid'];
$query=mysqli_query($conn,"SELECT * FROM `addpackage`where packageid=$packageid");

session_start(); $userid=$_SESSION['userid']; 
//echo $item_id;
echo "<table align=center>";
while($row= mysqli_fetch_array($query)){
    echo "<tr><th>PACKAGE ID</th><td style='border: solid 1px black;'>".$row['packageid']."</td></tr>";
    $packageid=$row['packageid'];
    echo "<tr><th>PACKAGE NAME</th><td style='border: solid 1px black;'>".$row['packagename']."</td></tr>";
    echo "<tr><th>LOCATION</th><td style='border: solid 1px black;'>".$row['location']."</td></tr>";
    echo "<tr><th>PRICE</th><td style='border: solid 1px black;'>"."$".$row['price']."</td></tr>";
    $price=$row['price'];
    echo "<tr><th>FEATURES</th><td style='border: solid 1px black;'>".$row['features'] ."</td></tr><td>";
    echo "<tr><th>DETAILS</th><td style='border: solid 1px black;'>".$row['details'] ."</td></tr><tr><th>IMAGE</th><td>";
    

            $pathx = "../images/";
            $file = $row["image"];
            echo "<tdstyle='border: solid 1px black;>";
            echo '<img src="'.$pathx.$file.'" height=100 width=100>';
            echo "</td></tr>";

            }           
echo "</table>";

?>

<!DOCTYPE HTML>
<html>
<head>
 <title>BOOKING</title>
</head>
 <body>
<div>
     <form action="booking_conn.php" method="post">  
    <input type="hidden" name="userid" value="<?php echo $userid; ?>" readonly>
     <input type="hidden" readonly name="packageid" value="<?php echo $packageid;?>"><br>
     <input type="hidden" readonly name="location" value="<?php echo $location;?>"><br>
     <input type="hidden" readonly name="price" value="<?php echo $price;?>"><br>
     <input type="hidden" readonly name="features" value="<?php echo $features;?>"><br>
     <input type="hidden" readonly name="details" value="<?php echo $details;?>"><br>
         CALENDER:<input type="date"name="calender"required><br><br><br>
         <input type="submit" value="BOOK">
         <button><a href="viewpackuser.php">CANCEL</a></button>
         <button><a href="cushome.php">GO TO HOME</a></button>
    </form>
     
</div>     
</body>
</html>