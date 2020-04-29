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
 $sql = "SELECT title, content, date_set, time_set FROM POSTS";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Posts = array();
        $Posts[] = $row["id"];
        $Posts[] = $row["title"];
        $Posts[] = $row["content"];
        $Posts[] = $row["date_set"];
        $Posts[] = $row["time_set"];
        $Postlists[] = $Posts;
    }
}
}
$conn->close();
echo '<script type="text/JavaScript">
var Posts = document.getElementById('Posts');
$i = 0;
while($i<2)
{
  var Blogbox = document.createElement('div');
  Blogbox.className('Blog-box');
  var dateandtime = document.createElement('div');
  dateandtime.className('dateandtime');
  var dateandtimeText = createTextNode("dateandtime");
  dateandtime.appendChild(dateandtimeText);
  Blogbox.appendChild(dateandtime);
  var title = document.createElement('div');
  title.className('title');
  var titleText = document.createTextNode("title");
  title.appendChild(titleText);
  Blogbox.appendChild(title);
  var content = document.createElement('div');
  content.className('text');
  var contentText = document.createTextNode("text");
  content.appendChild(contentText);
  Blogbox.appendChild(content);
  Posts.appendChild(Blogbox);
  $i++;
}
</script>';
?>
