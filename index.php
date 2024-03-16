<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/service-5.png" type="image/x-icon" />
    <title>Construction Website || Real Estate Companie</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->



    <header class="header">
  <a href="index.php" class="logo"><img src="images/post.png" class="img-fluid" style="width:120px;height:auto" alt=""></span></a>



  <nav class="navbar">
    <a href="#home" data-translate="home">home</a>
    <a href="#about" data-translate="about">about</a>
    <a href="#services" data-translate="services">services</a>
    <a href="#projects" data-translate="projects">projects</a>

    <a href="#contact" data-translate="contact">contact</a>
    <a href="#blogs" data-translate="blogs">blogs</a>
  </nav>
 
  <div class="icons">
    <div id="menu-btn" class="fas fa-bars" data-translate="menu"></div>
    <div id="info-btn" class="fas fa-info-circle" data-translate="info"></div>
    <div id="search-btn" class="fas fa-search" data-translate="search"></div>
    <div id="login-btn" class="fas fa-user d-none" data-translate="login"></div>
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
    <select onchange="changeLanguage(this.value)">
      <option value="en">English</option>
      <option value="sq">Shqip</option>
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

        <div class="content">
          <h3>We will provide you the best work which you dreamt for!</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas et
            vero mollitia nemo corporis consequatur aspernatur distinctio
            dignissimos velit nam.
          </p>
          <a href="#services" class="btn">read more</a>
        </div>
      </div>

      <div class="box-container">
        <div class="box">
          <h3>10+</h3>
          <p>years of experience</p>
        </div>

        <div class="box">
          <h3>1500+</h3>
          <p>project completed</p>
        </div>

        <div class="box">
          <h3>790+</h3>
          <p>satiesfied clients</p>
        </div>

        <div class="box">
          <h3>450+</h3>
          <p>active workers</p>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">our services</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/service-1.png" alt="" />
          <h3>building construction</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-2.png" alt="" />
          <h3>house renovation</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-3.png" alt="" />
          <h3>architechture design</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-4.png" alt="" />
          <h3>material supply</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-5.png" alt="" />
          <h3>construction consultant</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-6.png" alt="" />
          <h3>interior design</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-7.png" alt="" />
          <h3>building maintenance</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
        </div>

        <div class="box">
          <img src="images/service-8.png" alt="" />
          <h3>building renovation</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
            necessitatibus.
          </p>
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
            <i class="fas fa-plus"></i>
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
            <i class="fas fa-plus"></i>
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
            <i class="fas fa-plus"></i>
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
            <i class="fas fa-plus"></i>
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
            <i class="fas fa-plus"></i>
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
            <i class="fas fa-plus"></i>
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
              <img src="images/pic-1.png" alt="" />
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
      <h1 class="heading">contact us</h1>

      <div class="row">
      <iframe
            class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47032.520526757214!2d21.134885049130575!3d42.66291307304647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135373fc151ff005%3A0xa81b6eae52b0c7f3!2sPrishtina!5e0!3m2!1sen!2s!4v1647489028614!5m2!1sen!2s"
            allowfullscreen=""
            loading="lazy"
        ></iframe>

        <form action="">
          <h3>get in touch</h3>
          <input type="text" placeholder="name" class="box" />
          <input type="email" placeholder="email" class="box" />
          <input type="number" placeholder="phone" class="box" />
          <textarea
            name=""
            placeholder="message"
            class="box"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="send message" class="btn" />
        </form>
      </div>
    </section>



    <?php
include 'blog.php';

?>

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
        <a class="btn" href="#home">home</a>
        <a class="btn" href="#about">about</a>
        <a class="btn" href="#services">services</a>
        <a class="btn" href="#projects">projects</a>
        <a class="btn" href="#contact">contact</a>
        <a class="btn" href="#blogs">blogs</a>
      </div>

      <div class="credit" data-translate="created by">created by
        <a href="https://devvikram-a5281.web.app/" target="_blank">
          <span>Vikram Choudhary</span>
        </a>
        | all rights reserved!
      </div>
    </section>

    <!-- footer section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/translate.js" ></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
      lightGallery(document.querySelector(".projects .box-container"));
    </script>
  </body>
</html>
