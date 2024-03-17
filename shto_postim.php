<!-- index.php -->
<?php
require_once 'vendor/autoload.php'; // Përfshini shtesën për Google Translate API

$message = ""; // Mesazhi që do të shfaqet pas dërgimit të suksesshëm të formës

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "construction_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Lidhja dështoi: " . $conn->connect_error);
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
    $foto = file_get_contents($_FILES['foto']['tmp_name']);

    // Përkthe tekstet në gjuhët e zgjedhura (anglisht, italisht, spanjisht)
    $translator = new Stichoza\GoogleTranslate\GoogleTranslate();
    $translator->setSource('auto');
    $translator->setTarget('en');

    $title_en = $translator->translate($title);
    $content_en = $translator->translate($content);

    $translator->setTarget('it');
    $title_it = $translator->translate($title);
    $content_it = $translator->translate($content);

    $translator->setTarget('es');
    $title_es = $translator->translate($title);
    $content_es = $translator->translate($content);

    $sql = "INSERT INTO blog_posts (title_sq, title_en, title_it, title_es, content_sq, content_en, content_it, content_es, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $title, $title_en, $title_it, $title_es, $content, $content_en, $content_it, $content_es, $foto);

    if ($stmt->execute()) {
        $message = "Postimi është shtuar me sukses!";
    } else {
        $message = "Gabim gjatë shtimit të postimit: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shto Postim</title>
<style>
.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

#response {
    margin-top: 20px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
    <h2>Shto Postim</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <label for="title">Titulli:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">Përmbajtja:</label>
        <textarea id="content" name="content" rows="4" required></textarea>
        
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>
        
        <button type="submit">Posto</button>
    </form>
    <div id="response"><?php echo $message; ?></div>
</div>
</body>
</html>
