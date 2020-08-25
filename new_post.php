<!DOCTYPE html>
<meta charset="UTF-8">
<title>MY BLOG</title>
<link rel="stylesheet" href="style.css">

<form id="form" action="insert_post.php" method="GET">
        <label for="title">Titulo:</label>
        <input id="title" type="text" name="title" size="46" required/>
        <label for="content">Contenido:</label>
        <textarea id="content" type="text" name="content" rows="8" cols="64" required></textarea>
        <input id="submit" type="submit" value="Crear post" disabled/>
</form>

<script>
document.getElementById('form').addEventListener("keyup", () => {
        document.getElementById("submit").disabled = !form.checkValidity();
});
</script>
