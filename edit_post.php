<?php
require_once 'vendor/autoload.php'; // Përfshini shtesën për Google Translate API

$message = ""; // Mesazhi që do të shfaqet pas dërgimit të suksesshëm të formës

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($conn)) {
    if ($conn->connect_error) {
        die("Lidhja dështoi: " . $conn->connect_error);
    }

    // Kontrolloni nëse variablat janë të inicializuara dhe jo-tombe
    if(isset($_POST['post_id']) && isset($_POST['post_title']) && isset($_POST['post_content']) && isset($_FILES['post_image']['tmp_name'])) {
        $post_id = $_POST['post_id'];
        $title = $_POST['post_title'];
        $content = $_POST['post_content'];
        $foto = file_get_contents($_FILES['post_image']['tmp_name']);

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

        // Përditëso të dhënat e postimit në bazën e të dhënave
        $sql = "UPDATE blog_posts SET title_sq=?, title_en=?, title_it=?, title_es=?, content_sq=?, content_en=?, content_it=?, content_es=?, foto=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssi", $title, $title_en, $title_it, $title_es, $content, $content_en, $content_it, $content_es, $foto, $post_id);

        if ($stmt->execute()) {
            $message = "Postimi është modifikuar me sukses!";
        } else {
            $message = "Gabim gjatë modifikimit të postimit: " . $conn->error;
        }

        $stmt->close();
    } else {
        $message = "Gabim: Ju lutemi plotësoni të gjitha fushat!";
    }
} else {
}

// Merrni të gjithë postimet nga baza e të dhënave për të mbushur dropdown-in
$posts = array();
if (isset($conn)) {
    // Retrieve both title and content from the database
            $sql = "SELECT id, title_sq, content_sq FROM blog_posts";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Store both title and content in the posts array
                    $posts[$row["id"]] = array(
                        'title' => $row["title_sq"],
                        'content' => $row["content_sq"]
                    );
                }
            }

} else {
    $message .= " Gabim: Nuk mund të merrni postimet nga baza e të dhënave.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

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
        <h2>Edit Post</h2>
        <div class="container">
    <form action="edit_post.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="post_id">Post</label>
            <select id="post_id" name="post_id" class="form-control" required>
    <option value="">Select a Post</option>
    <?php foreach ($posts as $post_id => $post) { ?>
        <option value="<?php echo $post_id; ?>"><?php echo $post['title']; ?></option>
    <?php } ?>
</select>
        </div>

        <!-- Add hidden input fields for original title and content -->
        <input type="hidden" id="original_title" name="original_title">
        <input type="hidden" id="original_content" name="original_content">

        <div class="form-group">
            <label for="post_title">Post Title:</label>
            <input type="text" class="form-control" id="post_title" name="post_title" required>
        </div>

        <div class="form-group">
            <label for="post_content">Post Content:</label>
            <textarea class="form-control" id="post_content" name="post_content" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="post_image">Post Image:</label>
            <input type="file" class="form-control-file" id="post_image" name="post_image" accept="image/*" required>
        </div>

        <button type="submit" class="btn-primary">Save Changes</button>
    </form>
</div>

                <script>
    document.getElementById('post_id').addEventListener('change', function() {
        var selectedPostId = this.value;
        var posts = <?php echo json_encode($posts); ?>;
        var selectedPost = posts[selectedPostId];
        
        // Set the original title and content
        document.getElementById('original_title').value = selectedPost.title;
        document.getElementById('original_content').value = selectedPost.content;
        
        // Populate the input fields with the selected post's title and content
        document.getElementById('post_title').value = selectedPost.title;
        document.getElementById('post_content').value = selectedPost.content;
    });
</script>

                
         
  
    </div>
    <div class="response text-center"><?php echo $message; ?></div>
</body>
</html>
