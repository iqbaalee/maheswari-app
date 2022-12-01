<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.landing'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(URL::asset('/index')); ?>">
                        <img src="<?php echo e(URL::asset('assets/images/logo-maheswari.png')); ?>" class="card-logo card-logo-dark"
                            alt="logo dark" height="50">
                        <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" class="card-logo card-logo-light"
                            alt="logo light" height="30">
                    </a>
                    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                            <li class="nav-item">
                                <a class="nav-link fs-15 active" href="#hero">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#plans">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#reviews">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#team">Crew</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- end navbar -->

            <!-- start hero section -->
            <section class="section pb-0 hero-section" id="hero">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center mt-lg-5 pt-5">
                                <h1 class="display-6 fw-semibold mb-3 lh-base">Wujudkan Impian Pernikahanmu bersama
                                    <span class="text-success">Maheswari Enterprise </span>
                                </h1>
                                <p class="lead text-muted lh-base">Memberikan jasa pelayanan/ Wedding Organizer terbaik dan
                                    terstruktur. Sudah berpengalaman dan profesional dalam menyelenggarakan Event
                                    Pernikahan baik Indoor atau Outdoor, Pernikahan Tradisional, Nasional dan Internasional
                                    yang kami kemas sesuai dengan permintaan dan pengimplementasian yang Epic.</p>

                                <div class="d-flex gap-2 justify-content-center mt-4">
                                    <a href="<?php echo e(URL::asset('/auth-signup-basic')); ?>" class="btn btn-primary">Book Now <i
                                            class="ri-arrow-right-line align-middle ms-1"></i></a>
                                    <a href="<?php echo e(URL::asset('/pages-pricing')); ?>" class="btn btn-danger">View Package <i
                                            class="ri-eye-line align-middle ms-1"></i></a>
                                </div>
                            </div>

                            <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                <div class="demo-img-patten-top d-none d-sm-block">
                                    <img src="<?php echo e(URL::asset('assets/images/landing/img-pattern.png')); ?>"
                                        class="d-block img-fluid" alt="...">
                                </div>
                                <div class="demo-img-patten-bottom d-none d-sm-block">
                                    <img src="<?php echo e(URL::asset('assets/images/landing/img-pattern.png')); ?>"
                                        class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari1.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari2.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari3.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari4.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari5.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari6.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/demos/maheswari7.jpg')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                            <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                            </path>
                        </g>
                    </svg>
                </div>
                <!-- end shape -->
            </section>
            <!-- end hero section -->

            <!-- start client section -->
            <div class="pt-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="text-center mt-5">
                                <h5 class="fs-20">Trusted <span class="text-primary text-decoration-underline">by</span>
                                    the world's best</h5>

                                <!-- Swiper -->
                                <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="<?php echo e(URL::asset('assets/images/clients/amazon.svg')); ?>"
                                                    alt="client-img" class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="<?php echo e(URL::asset('assets/images/clients/walmart.svg')); ?>"
                                                    alt="client-img" class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="<?php echo e(URL::asset('assets/images/clients/lenovo.svg')); ?>"
                                                    alt="client-img" class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="<?php echo e(URL::asset('assets/images/clients/paypal.svg')); ?>"
                                                    alt="client-img" class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="<?php echo e(URL::asset('assets/images/clients/shopify.svg')); ?>"
                                                    alt="client-img" class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="<?php echo e(URL::asset('assets/images/clients/verizon.svg')); ?>"
                                                    alt="client-img" class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end client section -->

            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold lh-base">Kenapa Harus Maheswari ?</h1>
                                <p class="text-muted">Kami memberikan pelayanan terbaik, Kami bekerja sesuai dengan
                                    permintaan dan kebutuhan, Kami bekerja dengan penuh rasa tanggung jawab, Kami bantu
                                    untuk mewujudkan Your Wedding Dream, We are Young, Smart & Integrity</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Creative Thinking</h5>
                                    <p class="text-muted my-3 ff-secondary">Ide gagsan kreatif yang kami suguhkan akan
                                        menjadi hal yang tak terlupakan dalam momen sakral sekali seumur hidup.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-palette-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Young</h5>
                                    <p class="text-muted my-3 ff-secondary">Crew Muda dan Semangat yang akan terjun
                                        langsung
                                        membawa acara berkesan di era millenial. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-briefcase-5-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Zuper Team</h5>
                                    <p class="text-muted my-3 ff-secondary">Koordinasi dan Konsolidasi yang kontinyu antara
                                        Team dan Pihak Terkait membuat acara terintegrasi dengan baik. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-lightbulb-flash-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Innovate Ideas</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami terus berupaya mengikuti trend masa kini
                                        dan selera pasar tanpa mengurangi nilai-nilai luhur pernikahan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-settings-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Problem Solving</h5>
                                    <p class="text-muted my-3 ff-secondary">Dengan jam Terbang dan Wawasan membuat kami
                                        handal dan berpengalaman dalam menghadapi kendala dengan strategi Plan B dan Plan C.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
        </div>
        <!-- end container -->
        </section>
        <!-- end services -->

        <!-- start features -->
        <section class="section bg-light py-5" id="features">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div>
                            <img src="<?php echo e(URL::asset('assets/images/landing/features/img-1.png')); ?>" alt=""
                                class="img-fluid mx-auto">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <div class="avatar-sm icon-effect mb-4">
                                <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                    <i class="ri-collage-line fs-36"></i>
                                </div>
                            </div>
                            <h3 class="mb-3 fs-20">Huge collection of widgets</h3>
                            <p class="mb-4 ff-secondary fs-16">Collection widgets specialize in displaying many
                                elements of the same type, such as a collection of pictures from a collection of
                                articles from a news app or a collection of messages from a communication app.</p>

                            <div class="row pt-3">
                                <div class="col-3">
                                    <div class="text-center">
                                        <h4>5</h4>
                                        <p>Dashboards</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <h4>150+</h4>
                                        <p>Pages</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <h4>7+</h4>
                                        <p>Functional Apps</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted">
                            <h5 class="fs-12 text-uppercase text-success">Design</h5>
                            <h4 class="mb-3">Well Designed Dashboards</h4>
                            <p class="mb-4 ff-secondary">Quality Dashboards (QD) is a condition-specific, actionable
                                web-based application for quality reporting and population
                                management that is integrated into the Electronic Health Record (EHR).</p>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Ecommerce</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Analytics</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">CRM</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Crypto</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Projects</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="<?php echo e(URL::asset('/index')); ?>" class="btn btn-primary">Learn More <i
                                        class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                        <div>
                            <img src="<?php echo e(URL::asset('assets/images/landing/features/img-2.png')); ?>" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                    <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                        <div>
                            <img src="<?php echo e(URL::asset('assets/images/landing/features/img-3.png')); ?>" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted ps-lg-5">
                            <h5 class="fs-12 text-uppercase text-success">structure</h5>
                            <h4 class="mb-3">Well Documented</h4>
                            <p class="mb-4">used to describe something that is known about or known to be
                                true because there are many documents that describe it,
                                prove it, etc.</p>

                            <div class="vstack gap-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Dynamic Conetnt</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Setup plugin's information.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Themes customization information</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start plan -->
        <section class="section bg-light" id="plans">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold"> CHOOSE YOUR PACKAGE NOW</h3>
                            <p class="text-muted mb-4">Pilih Paket yang sesuai dengan Kebutuhan Kamu</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0">
                            <div class="card-body p-4 m-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">Legiseu Package</h5>
                                        <p class="text-muted mb-0">Starting From</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-stack-fill fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">2
                                            JT</span>
                                </div>
                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Crew WO <b>4</b> Person
                                                    <div><b>1</b> orang Leader</div>
                                                    <div><b>2</b> orang Officer</div>
                                                    <div><b>1</b> orang Liaison Officer CPW</div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Content creator (Story/Reels Instagram)
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Full Handy Talky Communication
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>4</b> Pcs Buku Panduan Pernikahan
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Stiker Nama Tempat Duduk
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Ijab
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Qobul
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Kordinasi Kesemua Vendor
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Technical Meeting
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Conffety / Party Popper
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Flasmob
                                                </div>
                                            </div>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">
                                            Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0 ribbon-box right">
                            <div class="card-body p-4 m-2">

                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">Niskala Package</h5>
                                        <p class="text-muted mb-0">Starting</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-stack-fill fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">3
                                            JT</span>
                                </div>
                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Crew WO <b>6</b> Person
                                                    <div><b>1</b> Orang Leader</div>
                                                    <div><b>2</b> Orang Officer</div>
                                                    <div><b>1</b> Orang Liaison Officer CPW</div>
                                                    <div><b>1</b> Orang Liaison Officer CPP</div>
                                                    <div><b>1</b> Orang Content Creator</div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Content creator (Story/Reels Instagram)
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Full Handy Talky Communication
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>6</b> Pcs Buku Panduan Pernikahan
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Stiker Nama Tempat Duduk
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Ijab
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Qobul
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Kordinasi Kesemua Vendor
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Technical Meeting
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Pendampingan Siraman
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Ballon Helium
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Confenty / Party Popper
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Flashmob
                                                </div>
                                            </div>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">
                                            Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0 ribbon-box right">
                            <div class="card-body p-4 m-2">
                                <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">Abimana Package</h5>
                                        <p class="text-muted mb-0">Starting From</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-stack-fill fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">4
                                            JT</span>
                                </div>
                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Pembawa Acara Akad s/d Pernikahan
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Crew WO <b>6</b> Person
                                                    <div><b>1</b> Orang Leader</div>
                                                    <div><b>2</b> Orang Officer</div>
                                                    <div><b>1</b> Orang Liaison Officer CPW</div>
                                                    <div><b>1</b> Orang Liaison Officer CPP</div>
                                                    <div><b>1</b> Orang Content Creator</div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Content creator (Story/Reels Instagram)
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Full Handy Talky Communication
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>6</b> Pcs Buku Panduan Pernikahan
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Stiker Nama Tempat Duduk
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Ijab
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Teks Qobul
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Kordinasi Kesemua Vendor
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Technical Meeting
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Pendampinagn Siraman
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Balon helium
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Conffenty / Party Popper
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Flasmob
                                                </div>
                                            </div>
                                </div>
                                </ul>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="btn btn-soft-success w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            </div>
            <!-- end container -->
        </section>
        <!-- end plan -->

        <!-- start faqs -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                            <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our
                                FAQ, you can
                                always contact us or email us. We will answer you shortly!</p>

                            <div class="">
                                <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                        class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email
                                    Us</button>
                                <button type="button" class="btn btn-info btn-label rounded-pill"><i
                                        class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                    Send Us Tweet</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row g-lg-5 g-4">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">General Questions</h5>
                            </div>
                        </div>
                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                            id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseOne" aria-expanded="true"
                                        aria-controls="genques-collapseOne">
                                        What is the purpose of using themes ?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        A theme is a set of colors, fonts, effects, and more that can be applied to your
                                        entire presentation to give it a
                                        consistent, professional look. You've already been using a theme, even if you
                                        didn't know it: the default Office theme,
                                        which consists.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                        aria-controls="genques-collapseTwo">
                                        Can a theme have more than one theme?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        A story can have as many themes as the reader can identify based on recurring
                                        patterns and parallels within the story
                                        itself. In looking at ways to separate themes into a hierarchy, we might find it
                                        useful to follow the example of a
                                        single book.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseThree" aria-expanded="false"
                                        aria-controls="genques-collapseThree">
                                        What are theme features?
                                    </button>
                                </h2>
                                <div id="genques-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Theme features is a set of specific functionality that may be enabled by theme
                                        authors. Themes must register each
                                        individual Theme Feature that the author wishes to support. Theme support
                                        functions should be called in the theme's
                                        functions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseFour" aria-expanded="false"
                                        aria-controls="genques-collapseFour">
                                        What is simple theme?
                                    </button>
                                </h2>
                                <div id="genques-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Simple is a free WordPress theme, by Themify, built exactly what it is named
                                        for: simplicity. Immediately upgrade the
                                        quality of your WordPress site with the simple theme To use the built-in Chrome
                                        theme editor.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->

                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">Privacy &amp; Security</h5>
                            </div>
                        </div>

                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                            id="privacy-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#privacy-collapseOne" aria-expanded="false"
                                        aria-controls="privacy-collapseOne">
                                        Does Word have night mode?
                                    </button>
                                </h2>
                                <div id="privacy-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        You can run Microsoft Word in dark mode, which uses a dark color palette to help
                                        reduce eye strain in low light
                                        settings. You can choose to make the document white or black using the Switch
                                        Modes button in the ribbon's View tab.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#privacy-collapseTwo" aria-expanded="true"
                                        aria-controls="privacy-collapseTwo">
                                        Is theme an opinion?
                                    </button>
                                </h2>
                                <div id="privacy-collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        A theme is an opinion the author expresses on the subject, for instance, the
                                        author's dissatisfaction with the narrow
                                        confines of French bourgeois marriage during that period theme is an idea that a
                                        writer repeats.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#privacy-collapseThree" aria-expanded="false"
                                        aria-controls="privacy-collapseThree">
                                        How do you develop a theme?
                                    </button>
                                </h2>
                                <div id="privacy-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        A short story, novella, or novel presents a narrative to its reader. Perhaps
                                        that narrative involves mystery, terror,
                                        romance, comedy, or all of the above. These works of fiction may also contain
                                        memorable characters, vivid
                                        world-building, literary devices.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                        aria-controls="privacy-collapseFour">
                                        Do stories need themes?
                                    </button>
                                </h2>
                                <div id="privacy-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        A story can have as many themes as the reader can identify based on recurring
                                        patterns and parallels within the story
                                        itself. In looking at ways to separate themes into a hierarchy, we might find it
                                        useful to follow the example of a
                                        single book.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end faqs -->

        <!-- start review -->
        <section class="section bg-primary" id="reviews">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <div>
                                <i class="ri-double-quotes-l text-success display-3"></i>
                            </div>
                            <h4 class="text-white mb-5">Testimomi
                            </h4>

                            <!-- Swiper -->
                            <div class="swiper client-review-swiper rounded" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" I am givng 5 stars. Theme is
                                                        great and everyone one stuff everything in theme. Future request
                                                        should not affect current
                                                        state of theme. "</p>

                                                    <div>
                                                        <h5 class="text-white">gregoriusus</h5>
                                                        <p>- Skote User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" Awesome support. Had few
                                                        issues while setting up because of my device, the support team
                                                        helped me fix them up in a day.
                                                        Everything looks clean and good. Highly recommended! "</p>

                                                    <div>
                                                        <h5 class="text-white">GeekyGreenOwl</h5>
                                                        <p>- Skote User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" Amazing template, Redux store
                                                        and components is nicely designed.
                                                        It's a great start point for an admin based project. Clean Code
                                                        and good documentation. Template is
                                                        completely in React and absolutely no usage of jQuery "</p>

                                                    <div>
                                                        <h5 class="text-white">sreeks456</h5>
                                                        <p>- Veltrix User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                </div>
                                <div class="swiper-button-next bg-white rounded-circle"></div>
                                <div class="swiper-button-prev bg-white rounded-circle"></div>
                                <div class="swiper-pagination position-relative mt-2"></div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end review -->

        <!-- start counter -->
        <section class="py-5 position-relative bg-light">
            <div class="container">
                <div class="row text-center gy-4">
                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>
                            <div class="text-muted">Projects Completed</div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                            <div class="text-muted">Win Awards</div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                            <div class="text-muted">Satisfied Clients</div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                            <div class="text-muted">Employees</div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end counter -->

        <!-- start Work Process -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Our Work Process</h3>
                            <p class="text-muted mb-4 ff-secondary">In an ideal world this website wouldn’t exist, a
                                client would
                                acknowledge the importance of having web copy before the Proin vitae ipsum vel ex
                                finibus semper design starts.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="<?php echo e(URL::asset('assets/images/landing/process-arrow-img.png')); ?>" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-quill-pen-line"></i>
                                </div>
                            </div>

                            <h5>Tell us what you need</h5>
                            <p class="text-muted ff-secondary">The profession and the employer and your desire to make
                                your mark.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="<?php echo e(URL::asset('assets/images/landing/process-arrow-img.png')); ?>" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-user-follow-line"></i>
                                </div>
                            </div>

                            <h5>Get free quotes</h5>
                            <p class="text-muted ff-secondary">The most important aspect of beauty was, therefore, an
                                inherent part.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-quill-pen-line"></i>
                                </div>
                            </div>

                            <h5>Deliver high quality product</h5>
                            <p class="text-muted ff-secondary">We quickly learn to fear and thus automatically avoid
                                potentially.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end Work Process -->

        <!-- start team -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Our <span class="text-danger">Crew</span></h3>
                            <p class="text-muted mb-4 ff-secondary">To achieve this, it would be necessary to have
                                uniform grammar,
                                pronunciation and more common words. If several languages coalesce the grammar.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar1.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>" class="text-body">Dedi
                                        wardatul Q</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar2.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>" class="text-body">Izzal
                                        Tufik N</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar3.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>" class="text-body">Rifa
                                        Nurfalah</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar4.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>" class="text-body">Didit
                                        Hardiyanto</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar5.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>" class="text-body">Anisa
                                        Permata A</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Crew</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar6.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>" class="text-body">Akbar
                                        alfarizi</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Crew</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar7.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                        class="text-body">Ayu</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Crew</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar8.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                        class="text-body">Berlian</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Crew</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-2">
                            <a href="<?php echo e(URL::asset('/pages-team')); ?>" class="btn btn-primary">View All Members <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end team -->

        <!-- start contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                            <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas but
                                also
                                understand that a smart concept should be supported with faucibus sapien odio measurable
                                results.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                                <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                                <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8">
                        <div>
                            <div class="col-lg-12">

                                <div class="card-header">
                                    <h4 class="card-title mb-0">Markers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div><!-- end card-body -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="logo light"
                                    height="17">
                            </div>
                            <div class=mt-4 fs-13">
                                <p>Premium Multipurpose Admin & Dashboard Template</p>
                                <p class="ff-secondary">You can build any type of web application like eCommerce,
                                    CRM, CMS, Project
                                    management apps, Admin Panels, etc using Velzon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-14">
                                        <li><a href="<?php echo e(URL::asset('/pages-profile')); ?>">About Us</a></li>
                                        <li><a href="<?php echo e(URL::asset('/pages-gallery')); ?>">Gallery</a></li>
                                        <li><a href="<?php echo e(URL::asset('/apps-projects-overview')); ?>">Projects</a></li>
                                        <li><a href="<?php echo e(URL::asset('/pages-timeline')); ?>">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Apps Pages</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-14">
                                        <li><a href="<?php echo e(URL::asset('/pages-pricing')); ?>">Calendar</a></li>
                                        <li><a href="<?php echo e(URL::asset('/apps-mailbox')); ?>">Mailbox</a></li>
                                        <li><a href="<?php echo e(URL::asset('/apps-chat')); ?>">Chat</a></li>
                                        <li><a href="<?php echo e(URL::asset('/apps-crm-deals')); ?>">Deals</a></li>
                                        <li><a href="<?php echo e(URL::asset('/apps-tasks-kanban')); ?>">Kanban Board</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-14">
                                        <li><a href="<?php echo e(URL::asset('/pages-faqs')); ?>">FAQ</a></li>
                                        <li><a href="<?php echo e(URL::asset('/pages-faqs')); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Velzon - Themesbrand
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        </div>
        <!-- end layout wrapper -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/pages/landing.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <script src="<?php echo e(URL::asset('assets/libs/gmaps/gmaps.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/gmaps.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\kp-maheswari\resources\views/landing.blade.php ENDPATH**/ ?>