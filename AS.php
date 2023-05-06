<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "login";

// Create connection
$conn = new mysqli($host, $user, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$user_id = 1; // Replace with the user ID you want to fetch
$sql = "SELECT name  FROM login WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row["name"];

  }
} else {
  echo "0 results";
}

$conn->close();
?>


<!-- 
<style>
  .user-info {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .username {
    font-size: 20px;
    color: #333;
  }
  
  .username a {
    text-decoration: none;
    color: #333;
  }
</style> -->
