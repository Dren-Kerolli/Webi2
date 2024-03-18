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

    // Kontrolloni nëse variablat janë të inicializuara dhe jo-tombe
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['foto']['tmp_name'])) {
        $title_sq = $_POST['title'];
        $content_sq = $_POST['content'];
        $foto = file_get_contents($_FILES['foto']['tmp_name']);

        // Përkthe tekstet në gjuhët e zgjedhura (anglisht, italisht, spanjisht)
        $translator = new Stichoza\GoogleTranslate\GoogleTranslate();
        $translator->setSource('auto');
        $translator->setTarget('en');

        $title_en = $translator->translate($title_sq);
        $content_en = $translator->translate($content_sq);

        $translator->setTarget('it');
        $title_it = $translator->translate($title_sq);
        $content_it = $translator->translate($content_sq);

        $translator->setTarget('es');
        $title_es = $translator->translate($title_sq);
        $content_es = $translator->translate($content_sq);

        $sql = "INSERT INTO blog_posts (title_sq, title_en, title_it, title_es, content_sq, content_en, content_it, content_es, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $title_sq, $title_en, $title_it, $title_es, $content_sq, $content_en, $content_it, $content_es, $foto);

        if ($stmt->execute()) {
            $message = "Postimi është shtuar me sukses!";
        } else {
            $message = "Gabim gjatë shtimit të postimit: " . $conn->error;
        }

        $stmt->close();
    } else {
        $message = "Gabim: Ju lutemi plotësoni të gjitha fushat!";
    }

    $conn->close();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 250px;
    height: 100%;
    background: #2c3e50;
    padding-top: 20px;
}

.sidebar h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 30px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    text-align: center;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
}

.sidebar ul li a:hover {
    background: #34495e;
}

.content {
    margin-left: 250px;
    padding: 20px;
}

.content h2 {
    color: #333;
    margin-bottom: 20px;
}

.content p {
    color: #666;
}

.container {
    max-width: 100%; /* Shkalla maksimale e kontejnerit */
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
}

.btn-primary {
    background-color: #4CAF50;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    color: #fff;
    cursor: pointer;
    width: 100%; /* Ndryshimi: Butoni mbush tërësinë e prindit */
}

.btn-primary:hover {
    background-color: #45a049;
}

.response {
    margin-top: 20px;
    font-weight: bold;
}
       
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
        <li><a href="shto_postim.php">Add Post</a></li>
            <li><a href="edit_post.php">Edit Post</a></li>
            <li><a href="delete_postime.php">Delete Post</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <h2>Dashboard</h2>
        <p>Welcome to the admin panel. Here you can manage your website.</p>

        <!-- Forma për shtimin e postimeve -->
        <div class="container">
            <h2 class="text-center">Shto Postim</h2>
            <form action="shto_postim.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Titulli:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                
                <div class="form-group">
                    <label for="content">Përmbajtja:</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Posto</button>
            </form>
            <div class="response text-center"><?php echo $message; ?></div>
        </div>
    </div>
</body>
</html>
