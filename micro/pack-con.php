<?php
$servername="localhost";
$username="root";
$password="";
$database_name="tourism"; 

$conn = mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
      
      $medicinename=$_POST['packagename'];
      $medcompany=$_POST['location'];
      $mfgdate=$_POST['price'];
      $expiry=$_POST['features'];
      $price=$_POST['details'];
      $stock=$_POST['image'];
      
      $sql_query="INSERT INTO addpackage (packagename,'location',price,features,details,'image')
      VALUES ('$packagename','$location','$price','$features','$details','$image')";

      if (mysqli_query($conn, $sql_query))
      {
          echo "success";
      }
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>