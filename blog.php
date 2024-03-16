<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Përfshij Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS për të vendosur butonat në qendër */
        body {
            text-align: center; /* Qendro tekstin në qendër të faqes */
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap; /* Lejo kartat të shkojnë në rreshta të rinj nëse faqja është mjaft e ngushtë */
        }

        .swiper-slide .card {
            position: relative; /* Përdorim pozicionin relative */
            width: 300px; /* Përshkruaj madhësinë e kartës */
            height: 300px; /* Përshkruaj madhësinë e kartës */
            overflow: hidden; /* Mbulo kartën me foto */
            border-radius: 10px;
            margin: 20px;
            background-color: #f9f9f9;
        }

        .swiper-slide img {
            position: absolute; /* Përdorim pozicionin absolute */
            top: 0;
            left: 0;
            width: 100%; /* Mbulo plotësisht hapësirën e kartës */
            height: 100%; /* Mbulo plotësisht hapësirën e kartës */
            object-fit: cover; /* Rregullo raportin e përshtatjes së imazhit */
            border-radius: 10px;
        }

        .card-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Fono transparent për tekstin */
            color: white;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }

        /* Stili për alertën e përditësuar */
        .custom-alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: 500px; /* Madhësia e përhershme e alertës */
            height: 500px; /* Lartësia e përhershme e alertës */
            max-width: 90%; /* Maksimumi i madhësisë së alertës */
            max-height: 90%; /* Maksimumi i lartësisë së alertës */
            overflow: auto;
        }

        .custom-alert img {
            max-width: 100%; /* Fotografia do të mbetet brenda madhësisë së alertës */
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- contact section ends -->

    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <?php
                // Lidhja me bazën e të dhënave
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "construction_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Lidhja dështoi: " . $conn->connect_error);
                }

                // Kërkesa SQL për të marrë postimet e blogut
                $sql = "SELECT id, title, content, foto FROM blog_posts";
                $result = $conn->query($sql);

                // Kontrolli nëse ka rezultate
                if ($result->num_rows > 0) {
                    // Shfaqja e postimeve të blogut
                    while($row = $result->fetch_assoc()) {
                        echo '<section class="swiper-slide slide">';
                        echo '<div class="card">';
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'" alt="' . $row["title"] . '">';
                        echo '<div class="card-content">';
                        echo '<h3>' . $row["title"] . '</h3>';
                        echo '<p>' . $row["content"] . '</p>';
                        echo '<button onclick="showAlert(`'.htmlspecialchars($row["title"]).'`, `'.htmlspecialchars($row["content"]).'`, `'.base64_encode($row["foto"]).'`)" class="btn">Read More</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</section>';
                    }
                } else {
                    echo "<p>No blog posts available.</p>";
                }

                // Mbyll lidhjen me bazën e të dhënave
                $conn->close();
                ?>
            </div>
            <div class="swiper-button-next" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></div>
            <div class="swiper-button-prev" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%);"></div>
        </div>
    </section>
    <!-- blogs section ends -->

    <script>
        function showAlert(title, content, image) {
            var img = new Image();
            img.src = "data:image/jpeg;base64," + image;
            img.onload = function() {
                var alertContent = '<div class="custom-alert">';
                alertContent += '<h3>' + title + '</h3>'; // Shto titullin në alertë
                alertContent += '<img src="' + img.src + '" alt="Image">';
                alertContent += '<p>' + content + '</p>';
                alertContent += '<button class="btn" onclick="closeAlert()">Close</button>'; // Shto butonin për mbylljen e alertës
                alertContent += '</div>';

                // Shto alertën në fund të dokumentit
                document.body.insertAdjacentHTML('beforeend', alertContent);
            };
        }

        // Funksion për mbylljen e alertës
        function closeAlert() {
            var alert = document.querySelector('.custom-alert');
            if (alert) {
                alert.remove();
            }
        }
    </script>
</body>
</html>
