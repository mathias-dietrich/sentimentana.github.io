

<?php
$servername = "sql269.your-server.de";
$username = "sentiment";
$password = "S3nt1m3nt";
$dbname = "flipflopdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM nasdaq";
$result = $conn->query($sql);

echo "<table border=0 cellpadding=2 cellspacing=2>";
	echo "<tr><td>Symbol</td><td>Count</td><td>Positive</td><td>Negative</td><td>Date</td></tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td bgcolor='#EEEEFF'> " . $row["symbol"]. "</td><td> " . $row["count"]. "</td><td>" . $row["positive"]."</td><td>" . $row["negative"]."</td><td>" . $row["date"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>

