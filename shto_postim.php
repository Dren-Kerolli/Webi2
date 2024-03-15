<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto Postim të Ri në Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Shto Postim të Ri në Blog</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="title">Titulli:</label>
        <input type="text" id="title" name="title" required>
        <label for="content">Përmbajtja:</label>
        <textarea id="content" name="content" rows="4" required></textarea>
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/jpeg, image/png, image/gif" required>
        <input type="submit" value="Shto Postim">
    </form>

    <?php
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

        $sql = "INSERT INTO blog_posts (title, content, foto) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $title, $content, $foto);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Postimi është shtuar me sukses!</p>";
        } else {
            echo "<p style='color: red;'>Gabim gjatë shtimit të postimit: " . $conn->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
