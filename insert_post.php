<link rel="stylesheet" href="style.css">

<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "my_database");

$stmt = $mysqli->prepare("INSERT INTO posts VALUES (?,?)");
$stmt->bind_param("ss", $_GET['title'], $_GET['content']);
$stmt->execute();
$stmt->close();

echo "<h3>Entrada añadida!</h3>";
echo "<a href='index.php'>Volver</a>";
?>
