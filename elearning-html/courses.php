<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link active">Courses</a>
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
            <a href="register.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


     <!-- Categories Start -->
    <div class="container-xxl py-5 category">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Categories
          </h6>
          <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="row g-3">
          <div class="col-lg-7 col-md-6">
            <div class="row g-3">
              <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="">
                  <img class="img-fluid" src="img/r1.jpeg" alt="" />
                  <div
                    class="bg-white text-left position-relative bottom-0 end-0 py-2 px-3"
                    style="margin: 1px"
                  >
                    <h5 class="m-0" style="padding-left: 12px">Web Design</h5>
                    <small class="text-primary">10 Courses</small>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                <a class="position-relative d-block overflow-hidden" href="">
                  <img class="img-fluid" src="img/r2.jpeg" alt="" />
                  <div
                    class="bg-white text-left position-relative bottom-0 end-0 py-2 px-3"
                    style="margin: 1px"
                  >
                    <h5 class="m-0">Graphic Design</h5>
                    <small class="text-primary">20 Courses</small>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                <a class="position-relative d-block overflow-hidden" href="">
                  <img class="img-fluid" src="img/r3.jpeg" alt="" />
                  <div
                    class="bg-white text-left position-relative bottom-90 end-0 py-2 px-3"
                    style="margin: 1px"
                  >
                    <h5 class="m-0">Cisco</h5>
                    <small class="text-primary">3 Courses</small>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <a class="position-relative d-block overflow-hidden" href="">
                  <img class="img-fluid" src="img/r4.jpeg" alt="" />
                  <div
                    class="bg-white text-left position-relative bottom-0 end-0 py-2 px-3"
                    style="margin: 1px"
                  >
                    <h5 class="m-0">Video Editing</h5>
                    <small class="text-primary">30 Courses</small>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-5 col-md-6 wow zoomIn"
            data-wow-delay="0.7s"
            style="min-height: 350px"
          >
            <a class="position-relative d-block h-100 overflow-hidden" href="">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="img/cat-4.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                style="margin: 1px"
              >
                <h5 class="m-0">Online Marketing</h5>
                <small class="text-primary">19 Courses</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Categories Start -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Courses
          </h6>
          <h1 class="mb-5">Popular Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/course-1.jpg" alt="" />
                <div
                  class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4"
                >
                  <a
                    href="#"
                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px"
                    >Read More</a
                  >
                  <a
                    href="#"
                    class="flex-shrink-0 btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0"
                    >Join Now</a
                  >
                </div>
              </div>
              <div class="text-center p-4 pb-0">
               
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small>(123)</small>
                </div>
                <h5 class="mb-4">
                  Web Design & Development Course for Beginners
                </h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-user-tie text-primary me-2"></i>John
                  Doe</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user text-primary me-2"></i>30
                  Students</small
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/course-2.jpg" alt="" />
                <div
                  class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4"
                >
                  <a
                    href="#"
                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px"
                    >Read More</a
                  >
                  <a
                    href="#"
                    class="flex-shrink-0 btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0"
                    >Join Now</a
                  >
                </div>
              </div>
              <div class="text-center p-4 pb-0">
               
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small>(123)</small>
                </div>
                <h5 class="mb-4">
                  Web Design & Development Course for Beginners
                </h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-user-tie text-primary me-2"></i>John
                  Doe</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user text-primary me-2"></i>30
                  Students</small
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/course-3.jpg" alt="" />
                <div
                  class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4"
                >
                  <a
                    href="#"
                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px"
                    >Read More</a
                  >
                  <a
                    href="#"
                    class="flex-shrink-0 btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0"
                    >Join Now</a
                  >
                </div>
              </div>
              <div class="text-center p-4 pb-0">
               
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small>(123)</small>
                </div>
                <h5 class="mb-4">
                  Web Design & Development Course for Beginners
                </h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-user-tie text-primary me-2"></i>John
                  Doe</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user text-primary me-2"></i>30
                  Students</small
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Courses End -->


     <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Testimonial
          </h6>
          <h1 class="mb-5">Our Students Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
          <div class="testimonial-item text-center">
            <img
              class="border rounded-circle p-2 mx-auto mb-3"
              src="img/PHOTO.jpg"
              style="width: 80px; height: 80px"
            />
            <h5 class="mb-0">Prince</h5>
            <p>Swe</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                "I never thought learning about computers could be this 
                engaging and rewarding! Thanks to eCOMPUTER TRAINING, 
                I've gained invaluable skills that have opened up countless
                 opportunities for me.
                 
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="border rounded-circle p-2 mx-auto mb-3"
              src="img/testimonial-2.jpg"
              style="width: 80px; height: 80px"
            />
            <h5 class="mb-0">Paul</h5>
            <p>Profession</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
               "eCOMPUTER TRAINING has truly transformed my 
               relationship with technology. The courses are well-structured, 
               easy to follow
                I've gone 
                confidently navigating various software and applications. 
                
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="border rounded-circle p-2 mx-auto mb-3"
              src="img/testimonial-3.jpg"
              style="width: 80px; height: 80px"
            />
            <h5 class="mb-0">John</h5>
            <p>Profession</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                Exceeded my expectations!
                The instructors are not only knowledgeable but also 
                incredibly supportive. They made learning complex
                concepts feel effortless and enjoyable.Thanks to eCOMPUTER
                 TRAINING,
                 
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="border rounded-circle p-2 mx-auto mb-3"
              src="img/testimonial-4.jpg"
              style="width: 80px; height: 80px"
            />
            <h5 class="mb-0">Lisa</h5>
            <p>Profession</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                The courses are well-structured,
                and easy to follow. I appreciate how the instructors 
                break down complex topics into simple, digestible chunks. 
                Thank you for empowering me to excel in 
                the digital age!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Quick Link</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>DOUALA, LITTORAL, CAMEROON
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+237 
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@example.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Gallery</h4>
            <div class="row g-2 pt-2">
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/r1.jpeg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/r2.jpeg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/r3.jpeg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/r4.jpeg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/course-3.jpg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/course-1.jpg"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email" required
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">eCOMPUTER TRAINING</a>, All
              Right Reserved.

              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By KEMOGNE PENKA GUY PRINCE
             
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>