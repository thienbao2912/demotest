<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main>
        <?php include "nav.php"; ?>
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">BShop Thú Cưng</h1>

                        <h6 class="text-center">luôn luôn phục vụ tận tình</h6>
                        <form action="timkiem.php" method="post" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">

                                </span>

                                <input name="search_product" type="search" class="form-control" id="keyword"
                                    placeholder="hãy nhập thứ cần tìm..." aria-label="Search" required type="search">

                                <button name="search_button" type="submit" class="form-control">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="cho.php">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Chó</h5>

                                        <p class="mb-0">Shop có rất nhiều loại chó như: Poddle, Corgi, Pug, Cỏ, Xúc
                                            Xích...</p>
                                    </div>

                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                </div>

                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png"
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="images/businesswoman-using-tablet-analysis.jpg"
                                    class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Thú Cưng</h5>

                                        <p class="text-white">uôi một bé thú cưng (thú kiểng) sẽ giúp bạn thêm yêu đời,
                                            giảm stress, thêm yêu đời. BShop chuyên cung cấp các loại Nhím kiểng,
                                            hamster, thỏ kiểng, bọ ú, chim cảnh, chó cảnh các loại uy tín chất lượng.
                                        </p>

                                        <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Đọc Thêm</a>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                </div>

                                <div class="social-share d-flex">
                                    <p class="text-white me-4">Share:</p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li></a>
                                </div>

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Những Danh Mục</h1>
                </div>

            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                aria-controls="design-tab-pane" aria-selected="true">Chó</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                aria-controls="marketing-tab-pane" aria-selected="false">Mèo</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab"
                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                aria-controls="finance-tab-pane" aria-selected="false">Chuột Hamster</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane"
                                aria-selected="false">Chim</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                data-bs-target="#education-tab-pane" type="button" role="tab"
                                aria-controls="education-tab-pane" aria-selected="false">Thỏ</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                                aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="cho.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chó Poddle</h5>

                                                        <p class="mb-0">Chó Poodle là giống chó săn vịt, rất giỏi trong
                                                            việc bơi lội.</p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                </div>

                                                <img src="images/cho-pudle-1.jpg" class="custom-block-image img-fluid"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="cho.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chó Corgi</h5>

                                                        <p class="mb-0"> Lông chó Corgi có kết cấu giống với chó tuyết
                                                            Samoyed và Husky.</p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/corgi.jpg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="cho.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chó Phốc</h5>

                                                        <p class="mb-0">Chó Phốc sóc hay Pomeranian là một giống chó
                                                            cảnh cỡ nhỏ, xinh.</p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                </div>

                                                <img src="images/phoc.jpg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="meo.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Mèo Chân Ngắn</h5>

                                                        <p class="mb-0">Mèo Chân Ngắn dễ thương</p>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="images/meo-chan-ngan-1.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="meo.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Mèo Chân Ngắn</h5>

                                                        <p class="mb-0">Mèo Chân Ngắn dễ thương</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/meo-chan-ngan-2.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel"
                                aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="chuot.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chuột Hamster</h5>

                                                        <p class="mb-0">Cái tên nổi tiếng nhất trong thế giới chuột Hamster, còn được biết đến với tên gọi Syrian Hamster.</p>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="images/chuot-1.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="chuot.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chuột Hamster</h5>

                                                        <p class="mb-0">Cái tên nổi tiếng nhất trong thế giới chuột Hamster, còn được biết đến với tên gọi Syrian Hamster.</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/chuot-2.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="chim.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chim Cảnh</h5>

                                                        <p class="mb-0">Chim (danh pháp khoa học: Aves) là tập hợp các loài động vật có xương sống, máu nóng, đi đứng bằng hai chân.</p>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="images/chim-2.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="chim.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Chim Cảnh</h5>

                                                        <p class="mb-0">Chim (danh pháp khoa học: Aves) là tập hợp các loài động vật có xương sống, máu nóng, đi đứng bằng hai chân.</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/chim-3.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                                aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="tho.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Thỏ Cảnh</h5>

                                                        <p class="mb-0">Thỏ là một loài động vật có vú nhỏ được xếp vào họ Leporidae thuộc bộ Lagomorpha, sinh sống ở nhiều nơi trên thế giới.</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                </div>

                                                <img src="images/tho-1.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="tho.php">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Thỏ Cảnh</h5>

                                                        <p class="mb-0">Thỏ là một loài động vật có vú nhỏ được xếp vào họ Leporidae thuộc bộ Lagomorpha, sinh sống ở nhiều nơi trên thế giới.</p>
                                                    </div>

                                                    <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                </div>

                                                <img src="images/tho-2.jpg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Một Số Câu Hỏi</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Nuôi thú cưng thì có lợi gì?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Giúp giảm căng thẳng <br>
                                        Giúp giảm đi sự cô đơn<br>
                                        Cải thiện sức khỏe thể chất và tinh thần tốt hơn<br>
                                        Giúp bạn biết quan tâm và chăm sóc mọi người<br>
                                        Sống có trách nhiệm<br>
                                        Thú cưng bảo vệ trẻ em cực tốt

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Nuôi thú cưng sao cho tốt?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Nắm rõ kinh nghiệm nuôi chó thì mới có thể giúp cho chú cún của bạn khỏe mạnh. Không phải bạn cứ ra cửa hàng chọn một em nhanh nhẹn về và cho ăn thật nhiều, tắm sạch sẽ là được.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Thú Cưng là gì?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Thú cưng là những loài động vật được chọn làm vật cưng nuôi để chăm sóc, làm bạn đồng hành, sẻ chia trong cuộc sống. Những vật nuôi được chọn làm thú cưng sẽ được nâng niu, chăm sóc như những người bạn, những đứa con tinh thần trong gia đình, thậm chí chúng được ôm ấp, ngủ cùng gia chủ.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>
       


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>