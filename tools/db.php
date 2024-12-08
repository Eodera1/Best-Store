 <?php
 function getDatabaseConnection() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "beststoredb";

  // Create connection
  $connection = new mysqli($servername, $username, $password, $database);
  if($connection->connect_error){
    die("Error failed to connect to MySQL: " . $connection->connect_error);
  }

  return $connection;
 }
 ?>


<!-- $dbConnection = new mysqli('localhost', 'username', 'password', 'your_database');
if ($dbConnection->connect_error) {
    die("Connection failed: " . $dbConnection->connect_error);
} -->
