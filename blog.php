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
            font-family: Arial, sans-serif; /* Përdor fontin Arial për të bërë tekstin më të lehtë për lexim */
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

        .swiper-slide .card {
            position: relative; /* Përdorim pozicionin relative */
            width: 800px; /* Përshkruaj madhësinë e kartës */
            height: 400px; /* Përshkruaj madhësinë e kartës */
            overflow: hidden; /* Mbulo kartën me foto */
            border-radius: 10px;
            margin: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shto hijen e butonit për efekt më të mirë vizual */
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
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .change-language-btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .change-language-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<header class="header">
  <a href="index.php" class="logo"><img src="images/post.png" class="img-fluid" style="width:120px;height:auto" alt=""></span></a>



  <nav class="navbar">
    <a href="#home" data-translate="home">home</a>
    <a href="#about" data-translate="about">about</a>
    <a href="#services" data-translate="services">services</a>
    <a href="#projects" data-translate="projects">projects</a>

    <a href="#contact" data-translate="contact">contact</a>
    <a href="blog.php" data-translate="blogs">blogs</a>
  </nav>
  <div class="icons">
    <div id="menu-btn" class="fas fa-bars" data-translate="menu"></div>
    <div id="info-btn" class="fas fa-info-circle" data-translate="info"></div>
        <div id="login-btn" class="fas fa-user " data-translate="login"></div>
    <div id="search-btn" class="fas fa-search d-none" data-translate="search">

    </div>
  </div>

  <form action="" class="search-form">
    <input
      type="search"
      name=""
      placeholder="search here..."
      id="search-box"
      data-translate="search_placeholder"
    />
    <label for="search-box" class="fas fa-search"></label>
  </form>

   <!-- Dropdown për zgjedhjen e gjuhës -->
   <div class="language-selector">
  <select onchange="changeLanguage(this.value)" style="font-size: 15px; padding: 10px;">
    <option value="en">🇬🇧 English</option>
    <option value="sq">🇦🇱 Shqip</option>
    <option value="pt">🇵🇹 Português</option>
    <option value="it">🇮🇹 Italiano</option>
  </select>
</div>


</header>
<!-- Dropdown për zgjedhjen e gjuhës -->
<select id="languageSelector" onchange="changeLanguage(this.value)">
    <option value="en">English</option>
    <option value="sq">Shqip</option>
    <option value="pt">Português</option>
    <option value="it">Italiano</option>
</select>

<!-- Sektori për të shfaqur postimet e blogut -->
<div class="swiper home-slider">
    <div class="swiper-wrapper" id="blog-posts">
        <!-- Përmbajtja e postimeve të blogut do të injektohet këtu nga JavaScript -->
        <?php include 'fetch_blog_posts.php'; ?>
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

    function changeLanguage(language) {
        var translations = {
            // Përkthimet këtu
        };

        // Përditëson tekstin e elementeve që kanë atributin për perkthim
        var elementsToTranslate = document.querySelectorAll('[data-translate]');
        elementsToTranslate.forEach(function(element) {
            var key = element.getAttribute('data-translate');
            if (translations[key]) {
                element.textContent = translations[key][language];
                // Për vendosjen e tekstit në input dhe vlerën e butonit, duhet ta trajtojmë ndryshe
                if (element.tagName === 'INPUT' && (element.type === 'text' || element.type === 'email' || element.type === 'number')) {
                    element.setAttribute('placeholder', translations[key][language]);
                } else if (element.tagName === 'TEXTAREA') {
                    element.setAttribute('placeholder', translations[key][language]);
                } else if (element.tagName === 'INPUT' && element.type === 'submit') {
                    element.setAttribute('value', translations[key][language]);
                }
            }
        });

        // Përditëson gjuhën e postimeve të blogut
        var blogPostElements = document.querySelectorAll('.blog-post');
        blogPostElements.forEach(function(post) {
            post.setAttribute('lang', language);
        });
    }
</script>
</body>
</html>
