<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .content {
      background: url(./images.jpg);
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <a class="active" href="home.php">Home</a>
    <a href="aevent.php">Add Events</a>
    <a href="contact.php">Contact</a>
    <a href="#about">About</a>
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">View Users</a>
    <ul class="dropdown-menu">

      <li><a class="dropdown-item" href="viewrazz.php">Razzle</a></li>
      <li><a class="dropdown-item" href="viewchords.php">Chords</a></li>
      <li><a class="dropdown-item" href="viewspeaker.php">Speaker</a></li>
      <li><a class="dropdown-item" href="viewpallete.php">Pallete</a></li>
      <li><a class="dropdown-item" href="viewmask.php">mask</a></li>
      <li><a class="dropdown-item" href="viewlitrary.php">litrary</a></li>
      <li><a class="dropdown-item" href="viewdesign.php">design</a></li>
      <li><a class="dropdown-item" href="viewcaptcha.php">Captcha</a></li>
    </ul>
  </div>

  <div class="content">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <img src="mitelogo.png" alt="" width="60" height="40">
        <a class="navbar-brand" href="#"> EUPHORIA CLUBS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="control.php">Admin Panel</a>
            </li>
            <li class="nav-item">
            </li>
          </ul>
        </div>
        <ul class="navbar-nav d-flex flex-row me-1">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link text-white" href="#"><i class="fas fa-envelope mx-1"></i> Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Profile </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="contact.php">Admin</a>
              </li>

              <li>
                <a class="dropdown-item" href="#">Log out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row column3">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" height="500px">
        <div class=" carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./bg1.png" alt="First slide">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>


      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->


    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Euphoria
            </h6>
            <p>
              Cultural club of mite.
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i>MITE,Moodbidri</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              euphoria@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +917892634195</p>
            <p><i class="fas fa-print me-3"></i> +8147006082</p>
          </div>

        </div>

      </div>
    </section>



    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">JoshiShetty.com</a>
    </div>
    <!-- Copyright -->
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>