<?php

require_once("connectdatabase.php");

$FirstName = $_POST["q20_fullName"]["first"];
$LastName = $_POST["q20_fullName"]["last"];
$PhoneNumber = $_POST["q6_phone"];
$GuestAmount = $_POST["q17_numberOf"];
$GuestArrivalTime = $_POST["q12_time"];
$date = $_POST["q5_date"]["year"]."-".$_POST["q5_date"]["month"]."-".$_POST["q5_date"]["day"];

	$checkDuplicate = "SELECT PhoneNumber, GuestArrivalDate FROM reservation WHERE PhoneNumber = '$PhoneNumber' AND GuestArrivalDate = '$date';";
	$results = $mysqli->query($checkDuplicate);
	if ($results->num_rows > 0) {
		echo "You have already made a reservation for this date.";
		exit;
	}
	$sql = "INSERT INTO Reservation
	(Fname, Lname, PhoneNumber, GuestAmount, GuestArrivalTime, GuestArrivalDate)
VALUES
('".$FirstName."', '".$LastName."', '".$PhoneNumber."', '".$GuestAmount."', '".$GuestArrivalTime."', '".$date."');";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
