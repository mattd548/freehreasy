<?php

// Include all neccesary files in this header, including the PHP files
 
 
// Create connection
$con=mysqli_connect("www.freehreasy.com","freehrea_any","12345","freehrea_login");
 
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
// Select all columns from the Classes table
$sql = "SELECT * FROM benefits";
 
// Check if there are results
if ($result = mysqli_query($con, $sql))
{
	// If so, then create a results array and a temporary one
	// to hold the data
	$resultArray = array();
	$tempArray = array();
 
	// Loop through each row in the result set
	while($row = $result->fetch_object())
	{
		// Add each row into our results array
		$tempArray = $row;
	    array_push($resultArray, $tempArray);
	}
 
	// Finally, encode the array to JSON and output the results
	echo json_encode($resultArray);
}
 
// Close connections
mysqli_close($con);
?>