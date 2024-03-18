<?php
// Kontrolloni nëse ka një kërkesë GET valide
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['post_id'])) {
    // Lidhuni me bazën e të dhënave
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kontrolloni lidhjen
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Merrni ID-në e postimit nga kërkesa GET
    $post_id = $_GET['post_id'];

    // Kërkesa SQL për të marrë URL-në e imazhit për postimin e zgjedhur
    $sql = "SELECT foto FROM blog_posts WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($image_data);
    
    // Kontrolloni nëse ka rezultate të gjetura
    if ($stmt->num_rows > 0) {
        // Marrja e rreshtit të rezultatit
        $stmt->fetch();
        
        // Kthejini URL-në e imazhit nëpërmjet një kodimi të imazhit (për shembull, Base64)
        $image_url = 'data:image/jpeg;base64,' . base64_encode($image_data);
        
        // Printoni URL-në e imazhit
        echo $image_url;
    } else {
        echo "Image not found";
    }
    
    // Mbyllni lidhjen me bazën e të dhënave
    $stmt->close();
    $conn->close();
} else {
    // Kthe një përgjigje gabimi nëse nuk është një kërkesë GET valide
    echo "Invalid request";
}
?>
