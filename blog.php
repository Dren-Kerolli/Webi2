<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                $sql = "SELECT title, content, foto FROM blog_posts";
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
                        echo '<a href="#about" class="btn">Read More</a>';
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
</body>
</html>