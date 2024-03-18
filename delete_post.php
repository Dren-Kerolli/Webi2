<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "construction_db";

// Krijoni lidhjen me bazën e të dhënave
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    
    // Fshij postimin nga baza e të dhënave
    $sql = "DELETE FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);

    if ($stmt->execute()) {
        $message = "Post deleted successfully!";
    } else {
        $message = "Error deleting post: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    header("Location: index.php"); // Kthehu në faqen kryesore pas fshirjes së postimit
    exit;
}
?>
