<link rel="stylesheet" href="style.css">

<h1>&#128221; MY BLOG</h1>
<a href='new_post.php'>Escribir post</a>

<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "my_database");

$result = $mysqli->query("SELECT * FROM posts");

while ($row = $result->fetch_assoc()) {
    echo "<h2>" . $row['title'] . "</h2>\n";
    echo "<p>" . $row['content'] . "</p>\n";
}
?>
