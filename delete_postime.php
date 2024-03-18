<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

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
    header("Location: admin_panel.php"); // Kthehu në faqen kryesore pas fshirjes së postimit
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Stilizimi i CSS-it këtu */
        /* Stilizimi CSS për panelin e adminit */
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

/* Stili për tabelën e postimeve */
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
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

        <!-- Tabela për të shfaqur postimet -->
        <table>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "testdb";
           
           // Krijoni lidhjen me bazën e të dhënave
           $conn = new mysqli($servername, $username, $password, $dbname);
           
           // Kontrolloni lidhjen
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
            // Lidhja me bazën e të dhënave

            // Merr postimet nga baza e të dhënave
            $sql = "SELECT id, title_sq FROM blog_posts";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Shfaq postimet në tabelë
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['title_sq']."</td>";
                    echo "<td><a href='delete_post.php?post_id=".$row['id']."'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No posts found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>