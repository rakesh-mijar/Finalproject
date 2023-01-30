<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="resp-style.css">
</head>

<body>
  <!--code from boostrap for design of navbar-->
  <header id="full_nav">
    <div class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <!-- <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://mite.ac.in/wp-content/uploads/2020/05/mite-mangalore-logo.png"width="50" height="62" alt="mite">-->
            <img src="mitelogo.png" height="62">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <i class="fas fa-stream navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                <i class="fa-light fa-house-user"></i>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/euphoria_mite/?hl=en"><i class="fa-brands fa-instagram"></i>Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">SignIn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">SignUp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
              </li>
            </ul>
            <div class="header_right">
              <div class="text-lg-end">
                <span>Call Us!!</span>
                <span class="phone_no">+91 8972345678</span>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>


  <section class="banner_section">
    <div class="container">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption">
              <div class="banner-content">
                <h1>About Us</h1>
                <blockquote class="blockquote bg-transparent"><!--from udemy-->
                  <p>Creativity is what gives wings to explore the hidden virtues. It is what powers life with beautiful experiences that etch themselves onto our hearts as memories. Memories that eventually shape one into better humans. ‘Euphoria’, the cultural club of MITE, is a huge community of creative individuals here to nurture their hidden talents with the superior motive of creating art. Here at ‘Euphoria’, we believe in the stories that make us humans, stories that give wings of perception to view the world in a different yet a beautiful way, stories that keep our feet on the ground while our mind in the stars and most importantly, we believe in the crazy dream of making the world a better place through art.</p>
                </blockquote>
                <a href="https://mite.ac.in/" class="btn main-btn">Click here to know more!!</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="banner-content">
                <h1>About Us</h1>
                <p>Creativity is what gives wings to explore the hidden virtues. It is what powers life with beautiful experiences that etch themselves onto our hearts as memories. Memories that eventually shape one into better humans. ‘Euphoria’, the cultural club of MITE, is a huge community of creative individuals here to nurture their hidden talents with the superior motive of creating art. Here at ‘Euphoria’, we believe in the stories that make us humans, stories that give wings of perception to view the world in a different yet a beautiful way, stories that keep our feet on the ground while our mind in the stars and most importantly, we believe in the crazy dream of making the world a better place through art.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="feature_section">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3 mb-4">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="chair.png">
                </div>
              </div>
              <div class="features-text">
                <h3>Chairman's message</h3>
                <button onclick="window.location.href='https://mite.ac.in/chairmans-message/'">Click here!</button>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="sentia.jpg">
                </div>
              </div>
              <div class="features-text">
                <h3>Events</h3>
                <button onclick="window.location.href='https://mite.ac.in/sentia/'">Click here1</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="bg1.png">
                </div>
              </div>
              <div class="features-text">
                <h3>Clubs</h3>
                <button onclick="window.location.href='clubs.php'">Click here!</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="ui-chat.png">
                </div>
              </div>
              <div class="features-text">
                <h3>24/07 Support</h3>
                <button onclick="window.location.href='contact.php'">Click here!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="landing_about_section" style="background: url(./images/v.jpg);background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 9rem 0;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6 col-sm-8">
          <div class="about-content">
            <h2>WE Providing Services Since 2005 With Proud.</h2>
            <p style="color: white; margin-bottom:2rem">Mangalore Institute of Technology & Engineering (MITE), a leading Engineering & Management Institution in the region is established by the Rajalaxmi Education Trust under the leadership of the Visionary Mr. Rajesh Chouta in 2007. The natural aura of the beautiful serene, green campus coupled by its passion to provide the best for students to learn, explore and has truly created a powerful atmosphere for everyone to nurture their skills and excel. MITE shapes professionals who are an optimum mix of right attitude, skill, culture and knowledge.</p>
            <a href="https://mite.ac.in/" class="btn main-btn">Read more</a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="main.js"></script>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/?lang=en-in" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.google.co.in/" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="https://www.instagram.com/" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>MITE- EUPHORIA
            </h6>
            <p>
              A cultural organization of Mite.
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Featured Links
            </h6>
            <p>
              <a href="#!" class="text-reset">NAAC</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Placements</a>
            </p>
            <p>
              <a href="#!" class="text-reset">NIRF</a>
            </p>
            <p>
              <a href="#!" class="text-reset">EBSB</a>
            </p>

          </div>

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Badaga Mijar, Near Moodabidre, Mangalore Tq, DK Dist, Karnataka - 574225</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@mite.ac.in
            </p>
            <p><i class="fas fa-phone me-3"></i> +91 9741731309</p>
            <p><i class="fas fa-print me-3"></i> +91 8258262695</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="#!">JoshiShetty.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</body>

</html>