<!DOCTYPE html>
<meta charset="UTF-8">
<title>MY BLOG</title>
<link rel="stylesheet" href="style.css">

<h1>&#128221; MY BLOG</h1>
<a href='new_post.php'>Escribir post</a>

<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "my_database");

$resultado = $mysqli->query("SELECT * FROM posts");

while ($fila = $resultado->fetch_assoc()) {
    echo "<h2>" . $fila['title'] . "</h2>\n";
    echo "<p>" . $fila['content'] . "</p>\n";
}
?>
