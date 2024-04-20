<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/fonts/stylesheet.css" />
        <link rel="stylesheet" href="assets/icon_font/css/all.css" />
        <link rel="stylesheet" href="assets/css/slick.css" />
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        <section class="slider">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="assets/media/banner.png" class="d-block w-100" alt="assets/media/banner.png" />
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h1 class="fs-45 mb-5 fw-bolder">Lorem Ipsum is simply dummy</h1>
                            <p class="slider_detail_text mb-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                            <a href="" class="btn site_black_btn primary_color text-uppercase fs-15 bg_site_black">Read More</a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/media/banner.png" class="d-block w-100" alt="assets/media/banner.png" />
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h1 class="fs-45 mb-5 fw-bolder">Lorem Ipsum is simply dummy</h1>
                            <p class="slider_detail_text mb-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                            <a href="" class="btn site_black_btn primary_color text-uppercase fs-15 bg_site_black">Read More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/media/banner.png" class="d-block w-100" alt="assets/media/banner.png" />
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h1 class="fs-45 mb-5 fw-bolder">Lorem Ipsum is simply dummy</h1>
                            <p class="slider_detail_text mb-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                            <a href="" class="btn site_black_btn primary_color text-uppercase fs-15 bg_site_black">Read More</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <i class="fas fa-chevron-left text-white"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <i class="fas fa-chevron-right text-white"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="about_section section_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="section_title mb-5">
                            <span class="text-uppercase fs-14 primary_color small_text">About US</span>
                            <h2 class="fs-35 text-black fw-bold mt-3">Legal Assure: Your Trusted Legal Partner</h2>
                        </div>
                        <p class="detail_text mb-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.
                        </p>
                        <p class="detail_text mb-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.
                        </p>
                        <p class="detail_text mb-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.
                        </p>
                        <div class="row mt-5 mb-3">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="listing tow_column hadding_list">
                                    <li><a href="" class="fs-15 black_text text-decoration-none">Wide Spectrum of Clients</a></li>
                                    <li><a href="" class="fs-15 black_text text-decoration-none">Wide Spectrum of Clients</a></li>
                                    <li><a href="" class="fs-15 black_text text-decoration-none">Wide Spectrum of Clients</a></li>
                                    <li><a href="" class="fs-15 black_text text-decoration-none">Wide Spectrum of Clients</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn site_black_btn text-white text-capitalize fs-15 bg_site_black fw-700"><span class="primary_color">18+</span> Years Experience</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="pl-lg-5">
                            <img src="assets/media/about_image.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="server_section section_padding bg_site_black">
            <div class="container">
                <div class="section_title mb-5 text-center">
                    <span class="text-uppercase fs-14 primary_color small_text">About US</span>
                    <h2 class="fs-35 text-white fw-bold mt-3 text-uppercase"><span class="primary_color">our</span> Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card white_box text-center bg_gray">
                            <div class="service_number_box mb-3 mx-auto">
                                1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-700 text-center mb-3">Title seArch</h5>
                                <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card white_box text-center bg_gray">
                            <div class="service_number_box mb-3 mx-auto">
                                2
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-700 text-center mb-3">Agreement to sale mou</h5>
                                <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card white_box text-center bg_gray">
                            <div class="service_number_box mb-3 mx-auto">
                                3
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-700 text-center mb-3">Sale deed</h5>
                                <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card white_box text-center bg_gray">
                            <div class="service_number_box mb-3 mx-auto">
                                4
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-700 text-center mb-3">Property tax transfer</h5>
                                <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card white_box text-center bg_gray">
                            <div class="service_number_box mb-3 mx-auto">
                                5
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-700 text-center mb-3">Mseb name transfer</h5>
                                <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card white_box text-center bg_gray">
                            <div class="service_number_box mb-3 mx-auto">
                                6
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-700 text-center mb-3">Society certificate name transfer</h5>
                                <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="to-show" class="hide" style="display: none;">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card white_box text-center bg_gray">
                                <div class="service_number_box mb-3 mx-auto">
                                    1
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-700 text-center mb-3">Title seArch</h5>
                                    <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card white_box text-center bg_gray">
                                <div class="service_number_box mb-3 mx-auto">
                                    2
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-700 text-center mb-3">Agreement to sale mou</h5>
                                    <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card white_box text-center bg_gray">
                                <div class="service_number_box mb-3 mx-auto">
                                    3
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-700 text-center mb-3">Sale deed</h5>
                                    <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card white_box text-center bg_gray">
                                <div class="service_number_box mb-3 mx-auto">
                                    4
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-700 text-center mb-3">Property tax transfer</h5>
                                    <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card white_box text-center bg_gray">
                                <div class="service_number_box mb-3 mx-auto">
                                    5
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-700 text-center mb-3">Mseb name transfer</h5>
                                    <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card white_box text-center bg_gray">
                                <div class="service_number_box mb-3 mx-auto">
                                    6
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-700 text-center mb-3">Society certificate name transfer</h5>
                                    <p class="card-text fs-15 text-center mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <a href="#" class="btn border-0 text-capitalize fs-14 px-4">Read More <i class="fas fa-arrow-right primary_color mx-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="button" class="btn site_black_btn text-capitalize fs-15 bg_gray fw-700" onclick="myFunction()">View All</button>
                </div>
            </div>
        </section>
        <section class="testimonial_section section_padding">
            <div class="container">
                <div class="section_title mb-5 text-center">
                    <span class="text-uppercase fs-14 primary_color small_text">Testimonials</span>
                    <h2 class="fs-35 black_text fw-bold mt-3 text-uppercase"><span class="primary_color">our</span> CLIENT SAY</h2>
                </div>
                <div class="testimonail">
                    <div class="slick_item">
                        <div class="card white_box text-center bg_site_black position-relative mt-5">
                            <div class="test_user">
                                <img src="assets/media/img1.jpg" alt="" srcset="" class="img-fluid" />
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Harish Maheta</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slick_item">
                        <div class="card white_box text-center bg_site_black position-relative mt-5">
                            <div class="test_user">
                                <img src="assets/media/img2.jpg" alt="" srcset="" class="img-fluid" />
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Harish Maheta</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slick_item">
                        <div class="card white_box text-center bg_site_black position-relative mt-5">
                            <div class="test_user">
                                <img src="assets/media/img1.jpg" alt="" srcset="" class="img-fluid" />
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Harish Maheta</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slick_item">
                        <div class="card white_box text-center bg_site_black position-relative mt-5">
                            <div class="test_user">
                                <img src="assets/media/img1.jpg" alt="" srcset="" class="img-fluid" />
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Harish Maheta</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="get_in_touch section_padding">
            <div class="container-fluid px-0">
                <div class="section_title mb-5 text-center">
                    <span class="text-uppercase fs-14 primary_color small_text">contact-us</span>
                    <h2 class="fs-35 black_text fw-bold mt-3 text-uppercase"><span class="primary_color">Get</span> in touch</h2>
                </div>
                <div class="row mx-0">
                    <div class="col-lg-5 col-md-5 col-sm-12 px-0 d-none d-lg-block">
                        <img src="assets/media/contact-us.png" alt="" srcset="" class="img-fluid" />
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 bg-black px-0">
                        <div class="p-3">
                            <div class="card bg-transparent border-0">
                                <form class="row p-md-5 aling-align-items-center">
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your Full name" />
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your Contact" />
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your Contact" />
                                    </div>
                                    <div class="col-12 mb-4">
                                        <textarea name="" id="" rows="10" class="form-control w-100" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn site_black_btn primary_color text-capitalize fs-15 bg_site_black fw-700">submit request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog_section section_padding pt-5">
            <div class="container">
                <div class="section_title mb-5 text-center">
                    <span class="text-uppercase fs-14 primary_color small_text">blogs</span>
                    <h2 class="fs-35 black_text fw-bold mt-3 text-uppercase"><span class="primary_color">our</span> insight</h2>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg_site_black position-relative ">
                            <img src="assets/media/blog_img.png" class="card-img-top" alt="..." />
                            <div class="card-body white_box">
                                <h5 class="primary_color mb-4 mt-3 three_line_show">Why is It Important to Perform a Property Title Verification before purchase any Property?</h5>
                                <p class="card-text fs-15 text-justify show_detail_five_line text-gray mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled and
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                        <a href="#" class="btn site_black_btn text-gray text-uppercase fs-15 bg_site_black fw-500 px-4 py-2">Read more</a>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                            <p class="primary_color text-md-right fs-14 mb-0">May 16, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg_site_black position-relative ">
                            <img src="assets/media/blog_img.png" class="card-img-top" alt="..." />
                            <div class="card-body white_box">
                                <h5 class="primary_color mb-4 mt-3 three_line_show">Why is It Important to Perform a Property Title Verification before purchase any Property?</h5>
                                <p class="card-text fs-15 text-justify show_detail_five_line text-gray mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled and
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                        <a href="#" class="btn site_black_btn text-gray text-uppercase fs-15 bg_site_black fw-500 px-4 py-2">Read more</a>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                            <p class="primary_color text-md-right fs-14 mb-0">May 16, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg_site_black position-relative ">
                            <img src="assets/media/blog_img.png" class="card-img-top" alt="..." />
                            <div class="card-body white_box">
                                <h5 class="primary_color mb-4 mt-3 three_line_show">Why is It Important to Perform a Property Title Verification before purchase any Property?</h5>
                                <p class="card-text fs-15 text-justify show_detail_five_line text-gray mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled and
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                        <a href="#" class="btn site_black_btn text-gray text-uppercase fs-15 bg_site_black fw-500 px-4 py-2">Read more</a>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                            <p class="primary_color text-md-right fs-14 mb-0">May 16, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg_site_black position-relative ">
                            <img src="assets/media/blog_img.png" class="card-img-top" alt="..." />
                            <div class="card-body white_box">
                                <h5 class="primary_color mb-4 mt-3 three_line_show">Why is It Important to Perform a Property Title Verification before purchase any Property?</h5>
                                <p class="card-text fs-15 text-justify show_detail_five_line text-gray mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled and
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                        <a href="#" class="btn site_black_btn text-gray text-uppercase fs-15 bg_site_black fw-500 px-4 py-2">Read more</a>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                            <p class="primary_color text-md-right fs-14 mb-0">May 16, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg_site_black position-relative ">
                            <img src="assets/media/blog_img.png" class="card-img-top" alt="..." />
                            <div class="card-body white_box">
                                <h5 class="primary_color mb-4 mt-3 three_line_show">Why is It Important to Perform a Property Title Verification before purchase any Property?</h5>
                                <p class="card-text fs-15 text-justify show_detail_five_line text-gray mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled and
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                        <a href="#" class="btn site_black_btn text-gray text-uppercase fs-15 bg_site_black fw-500 px-4 py-2">Read more</a>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                            <p class="primary_color text-md-right fs-14 mb-0">May 16, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg_site_black position-relative ">
                            <img src="assets/media/blog_img.png" class="card-img-top" alt="..." />
                            <div class="card-body white_box">
                                <h5 class="primary_color mb-4 mt-3 three_line_show">Why is It Important to Perform a Property Title Verification before purchase any Property?</h5>
                                <p class="card-text fs-15 text-justify show_detail_five_line text-gray mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled and
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                        <a href="#" class="btn site_black_btn text-gray text-uppercase fs-15 bg_site_black fw-500 px-4 py-2">Read more</a>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                            <p class="primary_color text-md-right fs-14 mb-0">May 16, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="text-center mt-4">
                            <a href="" class="btn site_black_btn black_text text-capitalize fs-15 bg-gray fw-700 w-25">View All</a>
                        </div>
            </div>
        </section>
        <section class="appoinment bg-black section_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="service_number_box mb-3 mx-auto size_128 d-flex align-items-center justify-content-center ">
                                <img src="assets/media/legal-document.png" alt="" class="img-fluid size_58">
                            </div>
                   
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <div class="section_title mb-5 text-center">
                            <span class="text-uppercase fs-14 primary_color small_text">make an appointment</span>
                            <h2 class="fs-35 text-gray fw-bold mt-3 text-uppercase"><span class="primary_color">Stop Worrying</span> About Your <br />
Legal Issues</h2>
                        </div>
                         
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 text-center">
                    <a href="" class="btn site_black_btn black_text bg_gray text-capitalize fs-15 bg-gray fw-600 w-100">Appointment</a>
                    </div>
                </div>
            </div>
        </section>
       
        <?php include 'include/footer.php'; ?>
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="assets/vendor/slick.min.js"></script>
        <script>
            function myFunction() {
                var x = document.getElementById("to-show");
                if (x.style.display == "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
        <script>
            $(document).ready(function () {
                $(".testimonail").slick({
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            },
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
            });
        </script>
    </body>
</html>
