<?phpinclude "../login/connection.php";
	
	$query ="SELECT * from mode";					// Select all data in table "status"
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
		$x= $row["Mode2"];					// Echo data , equivalent with send data to esp
		}
///

	


if(isset($_POST['ON1']))		// If press OFF
{	
	echo $x;
if($x==0)
{$x=1;}
else
{$x=0;};
echo $x;
					
			$sql = "UPDATE mode SET Mode2 = $x";	// Update present status to database
			// Echo "0" , equivalent with send data to App to toast OFF
			if ($conn->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
				//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
			} 
	}
header('Location: ../template2.php');	

?>

