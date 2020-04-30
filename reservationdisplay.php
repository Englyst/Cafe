<?php

session_start();
require_once("connectdatabase.php");

if(isset($_SESSION["loginSuccess"])){
  if($_SESSION["loginSuccess"] == true){

  }else{
    die("needlogin");
  }
}else{
  die("needlogin");
}

if(isset($_POST["ReservationDate"])){
  $ReservationDate = $_POST["ReservationDate"];
  $sql = "SELECT * FROM reservation WHERE GuestArrivalDate = '$ReservationDate';";
}else{
  $sql = "SELECT * FROM reservation;";
}
$results = $mysqli->query($sql);



?>
<form action = "" method = "post">
<input type="date" id="start" name="ReservationDate"
      >

      <input type="submit" value="Submit">
</form>



<?php
if ($results->num_rows > 0) {
    // output data of each row
    $resultsArray = $results->fetch_all(MYSQLI_ASSOC);
    echo "<pre>";
    	// var_dump ($resultsArray);

      echo "<table>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>First Name</th>";
      echo "<th>Last Name</th>";
      echo "<th>Phone Number</th>";
      echo "<th>Amount</th>";
      echo "<th>Arrival Time</th>";
      echo "<th>Arrival Date</th>";
      echo "</tr>";
      /*
       START  LOOP
      */
      foreach($resultsArray as $reservationArray){
        echo "<tr>";
        echo "<td>" . $reservationArray["ReservationID"] . "</td>";
        echo "<td>" . $reservationArray["Fname"] . "</td>";
        echo "<td>" . $reservationArray["Lname"] . "</td>";
        echo "<td>" . $reservationArray["PhoneNumber"] . "</td>";
        echo "<td>" . $reservationArray["GuestAmount"] . "</td>";
        echo "<td>" . $reservationArray["GuestArrivalTime"] . "</td>";
        echo "<td>" . $reservationArray["GuestArrivalDate"] . "</td>";
        echo "</tr>";

      }
      /*
       END  LOOP
      */
      echo "</table>";

    echo "</pre>";
} else {
    echo "0 results";
}


?>
