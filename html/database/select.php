<?php

include "conn.php"; 
// db 정보를 담고있는 코드들이 중복이므로 이와 같이 conn.php와 연동 가능.

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $row;
  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}

$conn->close();

?>