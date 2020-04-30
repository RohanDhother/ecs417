<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$Postlists = array();
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
 $sql = "SELECT title, content, date_set, time_set FROM Posts";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Posts = array();
        $Posts[] = $row["title"];
        $Posts[] = $row["content"];
        $Posts[] = $row["date_set"];
        $Posts[] = $row["time_set"];
        $Postlists[] = $Posts;
    }
}
}
$conn->close();
var postlists = <?php echo $Postlists?>;
echo '<script type="text/JavaScript">',
      'LoadBlog(postlists);',
      '</script>'
      ;
?>
