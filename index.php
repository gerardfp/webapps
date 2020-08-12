<link rel="stylesheet" href="style.css">
<h1>MY BLOG!</h1>
<a href='new_post.php'>Crear nuevo post</a>

<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "my_database");

$res = $mysqli->query("SELECT * FROM posts");

$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo "<h2>" . $row['title'] . "</h2>\n";
    echo "<p>" . $row['content'] . "</p>\n";
}
?>
