<?php
  session_start();
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
 $sql = "SELECT title, content, dateandtime FROM Posts";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Posts = array();
        $Posts[] = $row["title"];
        $Posts[] = $row["content"];
        $Posts[] = strval($row["dateandtime"]);
        $Postlists[] = $Posts;
    }
}
}
$conn->close();
echo '<script>var postlists = ' . json_encode($Postlists) . ';</script>';
echo '<script type="text/JavaScript">',
      'LoadBlog(postlists);',
      '</script>'
      ;
?>
