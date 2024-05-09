<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>eLEARNING - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/animate/animate.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
  <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
  <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 text-primary">
      <i class="fa fa-book me-3"></i>eLEARNING
    </h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="index.php" class="nav-item nav-link">Home</a>
      <a href="about.php" class="nav-item nav-link">About</a>
      <a href="courses.php" class="nav-item nav-link">Courses</a>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="team.php" class="dropdown-item">Our Team</a>
          <a href="testimonial.php" class="dropdown-item">Testimonial</a>
          <a href="404.php" class="dropdown-item">404 Page</a>
        </div>
      </div>
      <a href="contact.php" class="nav-item nav-link">Contact</a>
    </div>
    <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
  </div>
</nav>
<!-- Navbar End -->

<!-- Login Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-primary text-white px-3">Login</h6>
      <h2 class="mb-5">Login to Your Account</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="login1.php" method="POST" class="join-us-form">
          <div class="row g-3">
            <div class="col-12">
              <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="Email" required />
                <label for="email">Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required />
                <label for="password">Password</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3" type="submit" name="login">Login</button>
              <p id="login-response"></p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Login End -->

<!-- Footer Start -->
<!-- Add your footer code here -->
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
  <i class="bi bi-arrow-up"></i>
</a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
