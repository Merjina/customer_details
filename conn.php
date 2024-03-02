<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "jina";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
      <td>" . $row["customer_id"] . "</td>
      <td>" . $row["customer_name"] . "</td>
      <td>" . $row["email"] . "</td>
      <td>" . $row["phone"] . "</td>
      <td>" . $row["city"] . "</td>
    </tr>";}
}else {
  echo "<tr><td>No customers found</td></tr>";
}
$conn->close();
?>