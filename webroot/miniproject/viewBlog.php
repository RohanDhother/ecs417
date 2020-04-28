<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$Userlists = array();
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 $sql = "SELECT title, text, dateandtime FROM POSTS";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Users = array();
        $Users[] = $row["id"];
        $Users[] = $row["title"];
        $Users[] = $row["text"];
        $Users[] = $row["dateandtime"];
    }
if ($conn->query($sql) === TRUE) {
echo "<h6>Registration Successful</h6>
<p><a href='main.html'>Home</a></p>
";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
}
?>
