<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/service-5.png" type="image/x-icon" />
    <title>Construction Website || Real Estate Companie</title>
    <link rel="shortcut icon" type="image/png" href="images/post.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .header {
        display: none;
      }

     .preloaderBg {
        position: fixed;
        z-index: 10;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
      }

      .preloader {
        position: absolute; /* Position the logo relative to its parent */
        top: 50%; /* Move the logo 50% from the top of its parent */
        left: 50%; /* Move the logo 50% from the left of its parent */
        transform: translate(-50%, -50%); /* Center the logo */
        background: url(images/post.png) no-repeat center;
        background-size: 150px;
        width: 150px; /* Adjusted width to fit inside the circle */
        height: 150px; /* Adjusted height to fit inside the circle */
      }

      .preloader2 {
        border: 5px solid #f3f3f3;
        border-top: 5px solid #f00;
        border-radius: 50%;
        width: 250px;
        height: 250px;
        animation: spin 1s ease-in-out infinite;
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

    </style>
  </head>
  <body onload="preloader()">
  
  <div class="preloaderBg" id="preloader">
    <div class="preloader"></div>
    <div class="preloader2"></div>
  </div>

  <script>
    var preloadTime;

    function preloader() {
      preloadTime = setTimeout(showPage, 2000); // Adjusted delay to 1 second (1000 milliseconds)
    }

    function showPage() {
      document.getElementById("preloader").style.display = "none";
      document.querySelector("header").style.display = "flex"; 
    }
  </script>



    <header class="header">
    <a href="index.php" class="logo"><img src="images/post.png" class="img-fluid" style="width:120px;height:auto" alt=""></a>



  <nav class="navbar">
    <a href="index.php" data-translate="home">home</a>
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

        <form action="admin_panel.php" class="login-form" method="POST">
    <h3>Login Form</h3>
    <input type="email" name="email" placeholder="Enter your email" class="box" />
    <input type="password" name="password" placeholder="Enter your password" class="box" />
    <input type="submit" name="submit" value="Login now" class="btn" />
</form>

    <div id="search-btn" class="fas fa-search d-none" data-translate="search"></div>
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





<div class="contact-info">
  <div id="close-contact-info" class="fas fa-times" data-translate="close"></div>

  <div class="info">
    <i class="fas fa-user-tie"></i>
    <h3 >Vitantonio Danese</h3>
    <p data-translate="CEO">CEO</p>
  </div>

  <div class="info">
    <i class="fas fa-phone"></i>
    <h3 data-translate="phone number">phone number</h3>
    <p>+383 (0) 43 88 11 75</p>
  </div>

  <div class="info">
    <i class="fas fa-envelope"></i>
    <h3 data-translate="email address">email address</h3>
    <p>antaura.k@gmail.com</p>
  </div>

  <div class="info">
    <i class="fas fa-map-marker-alt"></i>
    <h3 data-translate="office address">office address</h3>
    <p>Prishtinë, 10000</p>
  </div>

  <div class="share">
    <!-- Add translation attributes to social media icons if necessary -->
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
  </div>
</div>


    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <section
            class="swiper-slide slide"
            style="background: url(images/home-slide-1.jpg) no-repeat"
          >
            <div class="content">
              <h3>we provide best service</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aspernatur beatae iusto pariatur laborum magnam eos!
              </p>
              <a href="#about" class="btn">get started</a>
            </div>
          </section>

          <section
            class="swiper-slide slide"
            style="background: url(images/home-slide-2.jpg) no-repeat"
          >
            <div class="content">
              <h3>making dream come to life</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aspernatur beatae iusto pariatur laborum magnam eos!
              </p>
              <a href="#about" class="btn">get started</a>
            </div>
          </section>

          <section
            class="swiper-slide slide"
            style="background: url(images/home-slide-3.jpg) no-repeat"
          >
            <div class="content">
              <h3>from concept to creation</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aspernatur beatae iusto pariatur laborum magnam eos!
              </p>
              <a href="#about" class="btn">get started</a>
            </div>
          </section>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading">about us</h1>

      <div class="row">
        <div class="video">
          <video src="images/about-vid.mp4" loop muted autoplay></video>
        </div>

        <div class="content text-center">
          <h4 data-translate="professionalismOffer">We offer our professionalism to all Italians who want to immigrate to Kosovo</h4>
          <p data-translate="expertiseDescription">Our professional expertise can assist you in the following areas:</p>
          <ul>
            <li data-translate="buyProperty">Buy a house, apartment, villa, land, and more</li>
            <li data-translate="construction">Construction of personalized houses and villas</li>
            <li data-translate="licenseConversion">Convert your driving license</li>
            <li data-translate="residenceRegistration">Register your residence</li>
            <li data-translate="carTransfer">Transfer your car with plates to Kosovo</li>
            <li data-translate="otherServices">And many other services...</li>
          </ul>
          <p data-translate="contactUs">Do not hesitate to contact us.</p>
          
          </div>
      </div>

      <div class="box-container">
        <div class="box">
          <h3 >10+</h3>
          <p data-translate="years of experience">years of experience</p>
        </div>

        <div class="box">
          <h3 >1500+</h3>
          <p data-translate="project completed">project completed</p>
        </div>

        <div class="box">
          <h3>790+</h3>
          <p data-translate="satisfied clients">satisfied clients</p>
        </div>

        <div class="box">
          <h3>450+</h3>
          <p data-translate="active workers">active workers</p>
        </div>
      </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
    <h1 class="heading" data-translate="services">our services</h1>

    <div class="box-container">
        <div class="box">
            <img src="images/services/industry.png" alt="" />
            <h3 data-translate="pharmaceuticalFactories">Pharmaceutical Factories</h3>
            <p data-translate="pharmaceuticalFactoriesDescription">We represent the production of pharmaceutical factories, ensuring unparalleled quality and the highest standards in every product we distribute.</p>
        </div>

        <div class="box">
            <img src="images/services/sofa.png" alt="" />
            <h3 data-translate="artOfFurnitureProduction">The Art of Furniture Production</h3>
            <p data-translate="artOfFurnitureProductionDescription">We specialize in large-scale furniture production, working with meticulous care to deliver exceptional quality in every detail.</p>
        </div>

        <div class="box">
            <img src="images/services/project-management.png" alt="" />
            <h3 data-translate="developmentOfConstructionProjects">Development of Construction Projects</h3>
            <p data-translate="developmentOfConstructionProjectsDescription">Construction Projects Development: Achieving Vision with Creativity, High Quality, and Sustainable Progress in the Construction Industry.</p>
        </div>

        <div class="box">
            <img src="images/services/eco-house.png" alt="" />
            <h3 data-translate="expertElectricalInstallations">Expert Electrical Installations</h3>
            <p data-translate="expertElectricalInstallationsDescription">Expert electrical installations for homes, businesses, and industries. Quality, precision, and safety guaranteed.</p>
        </div>

        <div class="box">
            <img src="images/services/real-estate.png" alt="" />
            <h3 data-translate="realEstateAgency">Real Estate Agency</h3>
            <p data-translate="realEstateAgencyDescription">We're a real estate agency offering personalized services with high quality for property sales, purchases, rentals, and management.</p>
        </div>

        <div class="box">
            <img src="images/services/travel.png" alt="" />
            <h3 data-translate="travelAgency">Travel Agency</h3>
            <p data-translate="travelAgencyDescription">Discover the world with ease through our travel agency. We specialize in crafting unforgettable journeys tailored to your preferences.</p>
        </div>

        <div class="box">
            <img src="images/services/3d-printer.png" alt="" />
            <h3 data-translate="plasticProduction">Plastic Production</h3>
            <p data-translate="plasticProductionDescription">From packaging to industrial applications, we deliver high-quality plastic products that redefine standards and promote environmental responsibility.</p>
        </div>

        <div class="box">
            <img src="images/services/export.png" alt="" />
            <h3 data-translate="exportImport">Export Import</h3>
            <p data-translate="exportImportDescription">Facilitating global trade through expert export-import services. With a focus on efficiency and reliability, we connect markets, delivering value and opportunities across borders.</p>
        </div>
    </div>
</section>


    <!-- services section ends -->

    <!-- projects section starts  -->

    <section class="projects" id="projects">
      <h1 class="heading">our projects</h1>

      <div class="box-container">
        <a href="images/project-1.jpg" class="box">
          <div class="image">
            <img src="images/project-1.jpg" alt="" />
          </div>
          <div class="content">
            <div class="info">
              <h3>dream home</h3>
              <p>construction, design</p>
            </div>
          </div>
        </a>

        <a href="images/project-2.jpg" class="box">
          <div class="image">
            <img src="images/project-2.jpg" alt="" />
          </div>
          <div class="content">
            <div class="info">
              <h3>dream home</h3>
              <p>construction, design</p>
            </div>
          </div>
        </a>

        <a href="images/project-3.jpg" class="box">
          <div class="image">
            <img src="images/project-3.jpg" alt="" />
          </div>
          <div class="content">
            <div class="info">
              <h3>dream home</h3>
              <p>construction, design</p>
            </div>
          </div>
        </a>

        <a href="images/project-4.jpg" class="box">
          <div class="image">
            <img src="images/project-4.jpg" alt="" />
          </div>
          <div class="content">
            <div class="info">
              <h3>dream home</h3>
              <p>construction, design</p>
            </div>
          </div>
        </a>

        <a href="images/project-5.jpg" class="box">
          <div class="image">
            <img src="images/project-5.jpg" alt="" />
          </div>
          <div class="content">
            <div class="info">
              <h3>dream home</h3>
              <p>construction, design</p>
            </div>
          </div>
        </a>

        <a href="images/project-6.jpg" class="box">
          <div class="image">
            <img src="images/project-6.jpg" alt="" />
          </div>
          <div class="content">
            <div class="info">
              <h3>dream home</h3>
              <p>construction, design</p>
            </div>
          </div>
        </a>
      </div>
    </section>

    <!-- projects section ends -->
   
    <!-- reviews section starts  -->

    <section class="reviews">
      <h1 class="heading">clients reviews</h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis
              unde suscipit quis consequuntur, tempora corporis ex molestias
              dignissimos in cumque sunt ducimus voluptate inventore harum earum
              rem aperiam vel modi?
            </p>
            <div class="user">
              <img src="images/photos/2.jpg" alt="" />
              <div class="info">
                <h3>john deo</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis
              unde suscipit quis consequuntur, tempora corporis ex molestias
              dignissimos in cumque sunt ducimus voluptate inventore harum earum
              rem aperiam vel modi?
            </p>
            <div class="user">
              <img src="images/pic-2.png" alt="" />
              <div class="info">
                <h3>john deo</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis
              unde suscipit quis consequuntur, tempora corporis ex molestias
              dignissimos in cumque sunt ducimus voluptate inventore harum earum
              rem aperiam vel modi?
            </p>
            <div class="user">
              <img src="images/pic-3.png" alt="" />
              <div class="info">
                <h3>john deo</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis
              unde suscipit quis consequuntur, tempora corporis ex molestias
              dignissimos in cumque sunt ducimus voluptate inventore harum earum
              rem aperiam vel modi?
            </p>
            <div class="user">
              <img src="images/pic-4.png" alt="" />
              <div class="info">
                <h3>john deo</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis
              unde suscipit quis consequuntur, tempora corporis ex molestias
              dignissimos in cumque sunt ducimus voluptate inventore harum earum
              rem aperiam vel modi?
            </p>
            <div class="user">
              <img src="images/pic-5.png" alt="" />
              <div class="info">
                <h3>john deo</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis
              unde suscipit quis consequuntur, tempora corporis ex molestias
              dignissimos in cumque sunt ducimus voluptate inventore harum earum
              rem aperiam vel modi?
            </p>
            <div class="user">
              <img src="images/pic-6.png" alt="" />
              <div class="info">
                <h3>john deo</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- reviews section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">
      <h1 class="heading" data-translate="contact us">contact us</h1>

      <div class="row">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47032.520526757214!2d21.134885049130575!3d42.66291307304647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135373fc151ff005%3A0xa81b6eae52b0c7f3!2sPrishtina!5e0!3m2!1sen!2s!4v1647489028614!5m2!1sen!2s"
          allowfullscreen=""
          loading="lazy"
        ></iframe>

        <form action="">
          <h3 data-translate="get in touch">get in touch</h3>
          <input type="text" placeholder="name" class="box" data-translate="name" />
          <input type="email" placeholder="email" class="box" data-translate="email" />
          <input type="number" placeholder="phone" class="box" data-translate="phone" />
          <textarea
            name=""
            placeholder="message"
            class="box"
            id=""
            cols="30"
            rows="10"
            data-translate="message"
          ></textarea>
          <button type="submit" class="btn" data-translate="send message">send message</button>

        </form>
      </div>
    </section>





    <!-- client logo section starts -->

    <section class="logo-container">
      <div class="swiper logo-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img src="images/client-logo-1.png" alt="" />
          </div>
          <div class="swiper-slide slide">
            <img src="images/client-logo-2.png" alt="" />
          </div>
          <div class="swiper-slide slide">
            <img src="images/client-logo-3.png" alt="" />
          </div>
          <div class="swiper-slide slide">
            <img src="images/client-logo-4.png" alt="" />
          </div>
          <div class="swiper-slide slide">
            <img src="images/client-logo-5.png" alt="" />
          </div>
          <div class="swiper-slide slide">
            <img src="images/client-logo-6.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- client logo section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="links">
        <a class="btn" data-translate="home">home</a>
        <a class="btn" data-translate="about" href="#about">about</a>
        <a class="btn" data-translate="services" href="#services">services</a>
        <a class="btn" data-translate="projects" href="#projects">projects</a>
        <a class="btn" data-translate="contact" href="#contact">contact</a>
        <a class="btn" data-translate="blogs" href="#blogs">blogs</a>
      </div>

      <div class="credit" data-translate="created by">
        ANTAURA | all rights reserved!
      </div>
    </section>

    <!-- footer section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/translate.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.js" integrity="sha512-tCkLWlSXiiMsUaDl5+8bqwpGXXh0zZsgzX6pB9IQCZH+8iwXRYfcCpdxl/owoM6U4ap7QZDW4kw7djQUiQ4G2A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
      lightGallery(document.querySelector(".projects .box-container"));
    </script>
  </body>
</html>
