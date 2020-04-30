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
function getPosts(){
    return $Postlists;
}
// echo "test";
// echo '<script src="viewBlog.js"></script>';
// echo "test2";
<script type="text/JavaScript">
      var posts = document.getElementById('Posts');
      var i = 0;
      while(i<2)
      {
        let blogbox = document.createElement('div');
        blogbox.className = 'Blog-box';
        let dateandtime = document.createElement('div');
        dateandtime.className = 'dateandtime';
        let dateandtimeText = document.createTextNode("dateandtime");
        dateandtime.appendChild(dateandtimeText);
        blogbox.appendChild(dateandtime);
        let title = document.createElement('div');
        title.className = 'title';
        let titleText = document.createTextNode("title");
        title.appendChild(titleText);
        blogbox.appendChild(title);
        let content = document.createElement('div');
        content.className = 'text';
        let contentText = document.createTextNode("text");
        content.appendChild(contentText);
        blogbox.appendChild(content);
        posts.appendChild(blogbox);
        i++;
      }
      </script>;
?>
