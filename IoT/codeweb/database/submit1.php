<?php
if (isset($_POST["submit"])){
$t2=$_POST["t2"];
$l2=$_POST["l2"];
$h2=$_POST["h2"];
$m2=$_POST["m2"];


include "../login/connection.php";
	
			
	$sql = "UPDATE auto SET Temperature1 = $t2";	// Update present status to database
		// Echo "0" , equivalent with send data to App to toast OFF
		if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
			//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
		} 


    $sql = "UPDATE auto SET Light1 = $l2";	// Update present status to database
    // Echo "0" , equivalent with send data to App to toast OFF
    if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
    	//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
    } 

     $sql = "UPDATE auto SET Humidity1 = $h2";	// Update present status to database
    // Echo "0" , equivalent with send data to App to toast OFF
    if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
    	//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
    } 

     $sql = "UPDATE auto SET Mois1 = $m2";	// Update present status to database
    // Echo "0" , equivalent with send data to App to toast OFF
    if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
    	//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
    } 


    header('Location: ../template1.php');	
}
	
?>