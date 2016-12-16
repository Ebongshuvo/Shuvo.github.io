<?php
$host="localhost";
$username="root";
$password="";
 $dbname="Eightsemesterp";
$conn=mysqli_connect($host,$username,$password);
   if (!$conn) {
	die("Can not connect");
}
   else{
   	echo "Connect succesfully";
   }

   $sql_crta="CREATE DATABASE Eightsemesterp";
   if ($conn->query($sql_crta)===TRUE) {
   	echo "DATABASE create succesfully";
   }
   else{
   	echo"DATABASE not created";
   }
 
  mysqli_select_db($conn,'Eightsemesterp');
      
   $sql_crta="CREATE TABLE IF NOT EXISTS UserInfo(
     Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     First_Name VARCHAR(10) NOT NULL,
     Last_Name VARCHAR(10) NOT NULL,
     Email VARCHAR(15) NOT NULL,
     Contact_No VARCHAR(15) NOT NULL,
     Password VARCHAR(20) NOT NULL,
     Location VARCHAR(15) NOT NULL
   )";
   if ($conn->query($sql_crta)===TRUE) {
    	echo"DATABASE table has created";
    } 
    else{
    	echo"DATABASE table not created";
    }
    include "regiform.php";
   
    $Fname=mysqli_real_escape_string($conn, $_REQUEST['Fname']);
 $Lname=mysqli_real_escape_string($conn, $_REQUEST['Lname']);
 $Email=mysqli_real_escape_string($conn, $_REQUEST['Email']);
 $Cnumber=mysqli_real_escape_string($conn, $_REQUEST['Cnumber']);
 $password=mysqli_real_escape_string($conn, $_REQUEST['password']);
$Location=mysqli_real_escape_string($conn, $_REQUEST['Location']);


 mysqli_select_db($conn,'UserInfo');
    $sql_crta="INSERT INTO UserInfo(Id, First_Name,Last_Name,Email,Contact_No,Password,Location)
             VALUES('','$Fname','$Lname','$Email','$Cnumber','$password','$Location')";

      if ($conn->query($sql_crta)===TRUE) {
      	echo"New record found";      }
      	else{
      		echo"Error:".$sql_crta."<br>".$conn->error; 
      	}


   $conn->close();


?>