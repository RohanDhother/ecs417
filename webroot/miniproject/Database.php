<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("user");
$dbpwd = getenv("password");
$dbname = getenv("ecs417");
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //This is to ensure that the INSERT query does not run
EVERY TIME the page is loaded, even if no form was submitted.
  $sql = "SELECT dateandtime, title, thepost FROM Blog";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
     }
 if ($conn->query($sql) === TRUE) {
 echo "<h6>Registration Successful</h6>
 <p><a href='exercise1.html'>Home</a></p>
 ";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }
 ?>
