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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        <section class="inner_page_slider position-relative">
            <div class="" data-bs-interval="10000">
                <img src="assets/media/inner_page_back.png" class="d-block w-100" alt="assets/media/banner.png" />
                <div class="carousel-caption d-none d-md-block text-white ">
                    <h1 class="fs-45 mb-5 fw-bolder mb-0 text-uppercase">Contact - Us</h1>
                </div>
            </div>
        </section>
        <section class="contact_detail section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-sm-space">
                        <div class="card white_box text-center bg_site_black position-relative mt-5 px-3">
                            <div class="test_user bg-black primary_color d-flex align-items-center justify-content-center shadow">
                                <i class="fas fa-map-marker-alt fs-45"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Office Address</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    Ojas, Row House No. 2, Laxman Nagar,Balewadi High Street, Pune, Maharashtra - 411045
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-space">
                        <div class="card white_box text-center bg_site_black position-relative mt-5 px-3">
                            <div class="test_user bg-black primary_color d-flex align-items-center justify-content-center shadow">
                                <i class="fas fa-mobile-alt fs-45"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Call Us</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray mb-1">
                                    +91 9881908241
                                </p>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    +91 9881908241
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card white_box text-center bg_site_black position-relative mt-5 px-3">
                            <div class="test_user bg-black primary_color d-flex align-items-center justify-content-center shadow">
                                <i class="fas fa-envelope fs-45"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="mt-5 primary_color mb-4">Email Us</h5>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray mb-1">
                                    abc123@gmail.com
                                </p>
                                <p class="card-text fs-15 text-center show_detail_five_line text-gray">
                                    abc123@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="get_in_touch section_padding pb-0">
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
        <section class="map_secion">
            <!--The div element for the map -->
            <div id="map"></div>
        </section>

        <?php include 'include/footer.php'; ?>
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

     
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly&region=US"
      defer></script>
      <script>
           function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
            });
            const geocoder = new google.maps.Geocoder();

            geocoder
                .geocode({ address: "Toledo" })
                .then((response) => {
                const position = response.results[0].geometry.location;

                map.setCenter(position);
                new google.maps.Marker({
                    map,
                    position,
                });
                })
                .catch((e) =>
                window.alert("Geocode was not successful for the following reason: " + e),
                );
            }
            window.initMap = initMap;
        </script>
    </body>
</html>
