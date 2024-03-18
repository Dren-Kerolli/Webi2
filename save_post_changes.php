<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

// Marrja e të dhënave nga forma dhe kontrolli i ekzistencës së tyre
if (isset($_POST['postId'], $_POST['language'], $_POST['title'], $_POST['content'])) {
    $postId = $_POST['postId'];
    $language = $_POST['language'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Përditësimi i të dhënave në bazën e të dhënave
    $sql = "UPDATE blog_posts SET title_$language = ?, content_$language = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $title, $content, $postId);
    if ($stmt->execute()) {
        echo "Ndryshimet u ruajtën me sukses.";
    } else {
        echo "Gabim gjatë ruajtjes së ndryshimeve: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Gabim: Mungojnë të dhënat e nevojshme nga forma.";
}

$conn->close();
?>
