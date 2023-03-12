<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Arduino Monitoring</title>
    <!-- Favicon -->
    <link rel="icon" href="http://icons.iconarchive.com/icons/bokehlicia/captiva/128/rocket-icon.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="base/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../base/css/custom.css" rel="stylesheet">
    <link href="../base/css/guages.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="base/css/slider/freshslider.min.css" rel="stylesheet">
</head>
<?php  
 include "../login/connection.php";
    date_default_timezone_set('Asia/Jakarta');
    $x = date("Y-m-d H:i:s");
    echo $x;
    $query ="SELECT * from schedule5";                    // Select all data in table "status"
    $result = $conn->query($query);
        while($row = $result->fetch_assoc()) 
        {   $date_start1=$row["date_start"];
    		 $date_stop1=$row["date_stop"];
    		$id1=$row["id"];
    		if ($x==$date_start1) {
    
    
    $sql = "UPDATE control SET Den2 = 1"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
            
    
 };

 if ($x==$date_stop1) {
    


    
    $sql = "UPDATE control SET Den2 = 0"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            };

            $sql = "DELETE FROM schedule5 WHERE id=$id1 "; 
      if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }  

    
 };




            
        }
  



     $query ="SELECT * from schedule6";                    // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $date_start2=$row["date_start"];
    		 $date_stop2=$row["date_stop"];
$id2=$row["id"];


if ($x==$date_start2) {
   
    
    $sql = "UPDATE control SET Bom2 = 1"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
 };
 if ($x==$date_stop2) {
   
     
    
    $sql = "UPDATE control SET Bom2 = 0"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } ;

            $sql = "DELETE FROM schedule6 WHERE id=$id2 "; 
      if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
 }
            
        }
      

         $query ="SELECT * from schedule7";                    // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $date_start3=$row["date_start"];
    		 $date_stop3=$row["date_stop"];
$id3=$row["id"];

if ($x==$date_start3) {

    $sql = "UPDATE control SET Rc2 = 1"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
 };



 if ($x==$date_stop3) {
   
     
    
    $sql = "UPDATE control SET Rc2 = 0"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }
            ;
            $sql = "DELETE FROM schedule7 WHERE id=$id3 "; 
      if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            }  
    
 };
            
        }


         $query ="SELECT * from schedule8";                    // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $date_start4=$row["date_start"];
    		 $date_stop4=$row["date_stop"];
$id4=$row["id"];
if ($x==$date_start4) {
   
    
    $sql = "UPDATE control SET Ps2 = 1"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
 };

 if ($x==$date_stop4) {
   
    
     
    $sql = "UPDATE control SET Ps2 = 0"; // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } ;

            $sql = "DELETE FROM schedule8 WHERE id=$id4 "; 
      if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
    
    
 }
            
        }


 


 

 


?>  
