<!DOCTYPE html>
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

        /* Përdorimi i media queries për të bërë faqen responsive */
        @media only screen and (max-width: 768px) {
            .swiper-slide .card {
                width: 100%; /* Përshtat madhësinë e kartës për dimensione të vogla ekrani */
                height: auto; /* Përshtat lartësinë e kartës për dimensione të vogla ekrani */
                margin: 10px 0; /* Rregullo distancën midis kartave */
            }

            .swiper-slide img {
                border-radius: 0; /* Hiq rrethimet për dimensione të vogla ekrani */
            }
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap; /* Lejo kartat të shkojnë në rreshta të rinj nëse faqja është mjaft e ngushtë */
            position: relative; /* Shto pozicionin relative për të vendosur dropdown */
        }

        .swiper-slide .language-selector {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 999; /* Vendos z-index për të qenë mbi imazhin */
        }

        .swiper-slide .card {
            position: relative; /* Përdorim pozicionin relative */
            width: 800px; /* Përshkruaj madhësinë e kartës */
            height: 400px; /* Përshkruaj madhësinë e kartës */
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

    <!-- Sektori për të shfaqur postimet e blogut -->
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

            // Gjuha e zgjedhur
            $selected_language = isset($_GET['lang']) ? $_GET['lang'] : 'en';

            // Kërkesa SQL për të marrë postimet e blogut
            $sql = "SELECT title_$selected_language AS title, content_$selected_language AS content, foto FROM blog_posts";
            $result = $conn->query($sql);

            // Kontrolli nëse ka rezultate
            if ($result->num_rows > 0) {
                // Shfaqja e postimeve të blogut
                while($row = $result->fetch_assoc()) {
                    echo '<div class="swiper-slide slide">';
                    echo '<div class="language-selector">';
                    echo '<form>';
                    echo '<label for="language">Zgjidh Gjuhën:</label>';
                    echo '<select id="language" name="lang">';
                    echo '<option value="en">English</option>';
                    echo '<option value="it">Italiano</option>';
                    echo '<option value="es">Español</option>';
                    echo '<option value="sq">Shqip</option>'; // Shtuar opsioni për gjuhën shqipe
                    echo '</select>';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="card">';
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'" alt="' . $row["title"] . '">';
                    echo '<div class="card-content">';
                    echo '<h3>' . $row["title"] . '</h3>';
                    echo '<p>' . $row["content"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
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

    <!-- Include the Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.home-slider', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Shto dëgjues për ndryshimin e dropdown
        document.getElementById('language').addEventListener('change', function() {
            var selectedLanguage = this.value;
            window.location.href = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?lang=" + selectedLanguage;
        });
    </script>
</body>
</html>
