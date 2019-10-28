<?php
include 'mod3_config.php';
include 'mod3_opendb.php';

$sql= "SELECT FirstName, LastName, EmailAddress, Phone FROM contact LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      echo "FirstName: " . $row["FirstName"]. "<br>";
      echo "LastName: " . $row["LastName"]. "<br>";
      echo "EmailAddress: " . $row["EmailAddress"]. "<br><hr>";
      echo "Phone Number: " . $row["Phone"]. "<br><hr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
