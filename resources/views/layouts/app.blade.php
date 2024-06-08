<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('web-template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web-template/css/style.css') }}" rel="stylesheet">


    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <div class="about_section layout_padding">
        <div class="container"> @yield('content')
        </div>
    </div>
</head>

<body>





    <!-- Carousel Start -->
    <div class="container-fluid carousel-header vh-100 px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">WE'll Save
                                Our Planet</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Protect Environment</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">WE'll Save
                                Our Planet</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Protect Environment</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">WE'll Save
                                Our Planet</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Protect Environment</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- About Start -->
    <div class="container-fluid about  py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5">
                    <div class="h-100">
                        <img src="img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7">
                    <h5 class="text-uppercase text-primary">About Us</h5>
                    <h1 class="mb-4">Our main goal is to protect environment</h1>
                    <p class="fs-5 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has
                    </p>
                    <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">About</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px;">Mission</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px;">Vision</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Lorem Ipsum 1</h5>
                                                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Lorem Ipsum 2</h5>
                                                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Lorem Ipsum 3</h5>
                                                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Biodata Section -->
    <h2>Tambahkan Biodata Anda</h2>
    <table>
        <form method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input name="nama" type="text" size=20 /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input name="email" type="text" size=20 /></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td>:</td>
                <td><input name="no_hp" type="text" size=20 /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Kirim" /></td>
            </tr>
        </form>
    </table>
    <!-- End Biodata Section -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-body py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Newsletter</h4>
                        <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 bg-secondary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn-hover-bg btn btn-primary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Our Services</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Ocean Turtle</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> White Tiger</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Social Ecology</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Loneliness</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Beauty of Life</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Present for You</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Volunteer</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Karen Dawson</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Jack Simmons</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Michael Linden</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Simon Green</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Natalie Channing</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Caroline Gerwig</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Our Gallery</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-1.jpg" data-lightbox="footerGallery-1"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-2.jpg" data-lightbox="footerGallery-2"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-3.jpg" data-lightbox="footerGallery-3"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-4.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-4.jpg" data-lightbox="footerGallery-4"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-5.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-5.jpg" data-lightbox="footerGallery-5"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-6.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-6.jpg" data-lightbox="footerGallery-6"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site
                            Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>