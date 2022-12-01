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
                                <a class="nav-link fs-15" href="#plans">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#features">Additional</a>
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
                                    <a href="#plans" class="btn btn-danger">View Package <i
                                            class="ri-eye-line align-middle ms-1"></i></a>
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
                                                <img src="<?php echo e(URL::asset('assets/images/demos/mahes.jpg')); ?>"
                                                    class="d-block w-100" alt="...">
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
                    <div class="swiper effect-coverflow-swiper rounded pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo e(URL::asset('assets/images/demos/maheswari1.jpg')); ?>" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(URL::asset('assets/images/demos/maheswari2.jpg')); ?>" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(URL::asset('assets/images/demos/maheswari3.jpg')); ?>" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(URL::asset('assets/images/demos/maheswari4.jpg')); ?>" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(URL::asset('assets/images/demos/maheswari5.jpg')); ?>" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(URL::asset('assets/images/demos/maheswari6.jpg')); ?>" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->

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
                                            <p class="text-muted my-3 ff-secondary">Ide gagsan kreatif yang kami suguhkan
                                                akan
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
                                            <p class="text-muted my-3 ff-secondary">Koordinasi dan Konsolidasi yang
                                                kontinyu
                                                antara
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
                                            <p class="text-muted my-3 ff-secondary">Kami terus berupaya mengikuti trend
                                                masa
                                                kini
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
                                            <p class="text-muted my-3 ff-secondary">Dengan jam Terbang dan Wawasan membuat
                                                kami
                                                handal dan berpengalaman dalam menghadapi kendala dengan strategi Plan B dan
                                                Plan C.
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
                        <div class="swiper paket " dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <!--paket1-->
                                        <div class="col-lg-12 justify-content-between">
                                            <div class="card plan-box mb-0">
                                                <div class="card-body p-4 m-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h5 class="mb-1 fw-semibold">Legiseu Package</h5>
                                                            <p class="text-muted mb-0">Starting From</p>
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
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
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
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Content creator (Story/Reels Instagram)
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Full Handy Talky Communication
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <b>4</b> Pcs Buku Panduan Pernikahan
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Stiker Nama Tempat Duduk
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Izin Nikah CPW Kepada Orangtua
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Ijab
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Qobul
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kordinasi Kesemua Vendor
                                                                    </div>
                                                                </div>
                                                                <div class="collapse mb-3" id="collapse1">
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Technical Meeting
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Conffety / Party Popper
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Flasmob
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </ul>
                                                        <div class="" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="false"
                                                            aria-controls="collapse">
                                                            <a href="javascript:void(0);"
                                                                class="card-link link-secondary">Lihat selengkapnya <i
                                                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                        </div>
                                                        <div class="mt-4">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-soft-success w-100">
                                                                Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--paket1-->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <!--paket2-->
                                    <div class="col-lg-12 justify-content-between">
                                        <div class="card plan-box mb-0 ribbon-box right">
                                            <div class="card-body p-4 m-2">

                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fw-semibold">Niskala Package</h5>
                                                        <p class="text-muted mb-0">Starting</p>
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
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
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
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Content creator (Story/Reels Instagram)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Full Handy Talky Communication
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <b>6</b> Pcs Buku Panduan Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Stiker Nama Tempat Duduk
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Ijab
                                                                </div>
                                                            </div>
                                                            <div class="collapse mb-3" id="collapse2">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Qobul
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kordinasi Kesemua Vendor
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Technical Meeting
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampingan Siraman
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Ballon Helium
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Confenty / Party Popper
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Flashmob
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </ul>
                                                    <div class="" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse2" aria-expanded="false"
                                                        aria-controls="collapse">
                                                        <a href="javascript:void(0);"
                                                            class="card-link link-secondary">Lihat selengkapnya <i
                                                                class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">
                                                            Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--paket2-->
                                </div>

                                <div class="swiper-slide">
                                    <!--paket3-->
                                    <div class="col-lg-12 justify-content-between">
                                        <div class="card plan-box mb-0 ribbon-box right">
                                            <div class="card-body p-4 m-2">
                                                <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fw-semibold">Abimana Package</h5>
                                                        <p class="text-muted mb-0">Starting From</p>
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
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pembawa Acara Akad s/d Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
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
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Content creator (Story/Reels Instagram)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Full Handy Talky Communication
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <b>6</b> Pcs Buku Panduan Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Stiker Nama Tempat Duduk
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                                </div>
                                                            </div>
                                                            <div class="collapse mb-3" id="collapse3">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Ijab
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Qobul
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kordinasi Kesemua Vendor
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Technical Meeting
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampingan Siraman
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Balon helium
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Conffenty / Party Popper
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Flasmob
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                                </ul>
                                                <div class="" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                    aria-expanded="false" aria-controls="collapse">
                                                    <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                        selengkapnya <i
                                                            class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);" class="btn btn-soft-success w-100">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--paket3-->

                                </div>

                                <div class="swiper-slide">
                                    <!--paket4-->
                                    <div class="col-lg-12 justify-content-between">
                                        <div class="card plan-box mb-0">
                                            <div class="card-body p-4 m-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fw-semibold">Adiluhung Package</h5>
                                                        <p class="text-muted mb-0">Starting From</p>
                                                    </div>
                                                </div>
                                                <div class="py-4 text-center">
                                                    <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">5
                                                            JT</span>
                                                </div>
                                                <div>
                                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                        <li>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pembawa Acara Akad s/d Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Crew WO <b>7</b> Person
                                                                    <div><b>1</b> Orang Leader</div>
                                                                    <div><b>3</b> Orang Officer</div>
                                                                    <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                    <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                    <div><b>1</b> Orang Content Creator</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Content creator (Story/Reels Instagram)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Full Handy Talky Communication
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <b>7</b> Pcs Buku Panduan Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Stiker Nama Tempat Duduk
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                                </div>
                                                            </div>
                                                            <div class="collapse mb-3" id="collapse4">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Ijab
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Qobul
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kordinasi Kesemua Vendor
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Technical Meeting
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampinagn Siraman
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampinagn Fitting Busana
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Balon helium
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Conffenty / Party Popper
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Fire Works (Kembang Api)
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Flasmob
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                                </ul>
                                                <div class="" data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                    aria-expanded="false" aria-controls="collapse">
                                                    <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                        selengkapnya <i
                                                            class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);" class="btn btn-soft-success w-100">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--paket4-->
                                </div>
                                <div class="swiper-slide">
                                    <!--paket5-->
                                    <div class="col-lg-12 justify-content-between">
                                        <div class="card plan-box mb-0">
                                            <div class="card-body p-4 m-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fw-semibold">Emerald Package</h5>
                                                        <p class="text-muted mb-0">Starting From</p>
                                                    </div>
                                                </div>
                                                <div class="py-4 text-center">
                                                    <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">6
                                                            JT</span>
                                                </div>
                                                <div>
                                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                        <li>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pembawa Acara Akad s/d Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Crew WO <b>7</b> Person
                                                                    <div><b>1</b> Orang Leader</div>
                                                                    <div><b>3</b> Orang Officer</div>
                                                                    <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                    <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                    <div><b>1</b> Orang Content Creator</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Content creator (Story/Reels Instagram)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Full Handy Talky Communication
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <b>7</b> Pcs Buku Panduan Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Stiker Nama Tempat Duduk
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                                </div>
                                                            </div>
                                                            <div class="collapse mb-3" id="collapse5">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Ijab
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Qobul
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kordinasi Kesemua Vendor
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Technical Meeting
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampinagn Siraman
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampinagn Fitting Busana
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Balon helium
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Conffenty / Party Popper
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Fire Works (Kembang Api)
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Sexophone / Biola
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Smoke Boom
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Flasmob
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                                </ul>
                                                <div class="" data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                    aria-expanded="false" aria-controls="collapse">
                                                    <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                        selengkapnya <i
                                                            class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);" class="btn btn-soft-success w-100">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--paket5-->
                                </div>

                                <div class="swiper-slide">
                                    <!--paket6 -->
                                    <div class="col-lg-12 justify-content-between">
                                        <div class="card plan-box mb-0">
                                            <div class="card-body p-4 m-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fw-semibold">Luxury Package</h5>
                                                        <p class="text-muted mb-0">Starting From</p>
                                                    </div>
                                                </div>
                                                <div class="py-4 text-center">
                                                    <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">8,5
                                                            JT</span>
                                                </div>
                                                <div>
                                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                        <li>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pembawa Acara Akad s/d Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Crew WO <b>8</b> Person
                                                                    <div><b>1</b> Orang Leader</div>
                                                                    <div><b>4</b> Orang Officer</div>
                                                                    <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                    <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                    <div><b>1</b> Orang Content Creator</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Content creator (Story/Reels Instagram)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Full Handy Talky Communication
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <b>7</b> Pcs Buku Panduan Pernikahan
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Stiker Nama Tempat Duduk
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Izin Nikah CPW Kepada Orangtua
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                                </div>
                                                            </div>
                                                            <div class="collapse mb-3" id="collapse6">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Ijab
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Teks Qobul
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kordinasi Kesemua Vendor
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Technical Meeting
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampinagn Siraman
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Pendampinagn Fitting Busana
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        2 Pcs Buku Tamu
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="flex-shrink-0 text-success me-1">
                                                                            <i
                                                                                class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            Balon helium
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Conffenty / Party Popper
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Fire Works (Kembang Api)
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Sexophone / Biola
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Dry Ice
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Smoke Boom
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Flasmob
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                                </ul>
                                                <div class="" data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse">
                                                    <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                        selengkapnya <i
                                                            class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);" class="btn btn-soft-success w-100">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--paket6-->
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-dark"></div>
                        </div>
                        <div class=" swiper next swiper-button-next"></div>
                        <div class="swiper-prev swiper-button-prev"></div>
                    </div>
                </section>
                <!-- end package -->

                <!-- start add -->
                <section class="section" id="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-muted">
                                    <div class="text-center mb-5">
                                        <h3 class="mb-3 fw-semibold">ADDITIONAL</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6">
                                            <div class="card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img class="rounded-start img-fluid h-100 object-cover"
                                                            src="<?php echo e(URL::asset('assets/images/small/img1.jpg')); ?>"
                                                            alt="Card image">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-header">
                                                            <h5 class="card-title mb-0">Additional</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text mb-2"> <b>IDR 600.000</b> | Saxophone/Biola
                                                            </p>
                                                            <p class="card-text mb-2"><b>IDR 700.000</b> |
                                                                Fireworks,confetty
                                                            </p>
                                                            <p class="card-text mb-2"><b>IDR 250.000</b> | Balon Helium
                                                            </p>
                                                            <p class="card-text mb-2"><b>IDR 250.000</b> | Dry Ice,
                                                                Firework,
                                                                Confetty, Balon
                                                                Helium </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xxl-6">
                                            <div class="card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img class="rounded-end img-fluid h-100 object-cover"
                                                            src="<?php echo e(URL::asset('assets/images/small/img-light.jpg')); ?>"
                                                            alt="Card image">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-header">
                                                            <h5 class="card-title mb-0">Lighting equipment</h5>
                                                            <h5 class="card-title mb-0"><b>IDR 2.500.000</b></h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text mb-2">- 4 Beam</p>
                                                            <p class="card-text mb-2">- 12 Parled</p>
                                                            <p class="card-text mb-2">- 4 Peresnel</p>
                                                            <p class="card-text mb-2">- 1 Genset + Bahan Bakar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="col-lg-12">
                                <div class="text-muted">
                                    <div class="text-center mb-5">
                                        <h3 class="mb-3 fw-semibold">MUSIC ENTERTAINMENT</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6">
                                            <div class="card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img class="rounded-start img-fluid h-100 object-cover"
                                                            src="<?php echo e(URL::asset('assets/images/small/music1.jpg')); ?>"
                                                            alt="Card image">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-header">
                                                            <h5 class="card-title mb-0">Eectone</h5>
                                                            <h5 class="card-title mb-0"><b>IDR 4.000.000</b></h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text mb-2">- 2 Orang Penyanyi (P&L)</p>
                                                            <p class="card-text mb-2">- Keyboadist</p>
                                                            <p class="card-text mb-2">- Saxophone</p>
                                                            <p class="card-text mb-2">- Kendang</p>
                                                            <p class="card-text mb-2">- Sound Sistem 3000 watt</p>
                                                            <p class="card-text mb-2">- Diesel</p>
                                                            <p><br></p>
                                                            <p class="card-text"><small class="text-muted">Start
                                                                    Performance
                                                                    10.00-16.00 WIB</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xxl-6">
                                            <div class="card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img class="rounded-end img-fluid h-100 object-cover"
                                                            src="<?php echo e(URL::asset('assets/images/small/music2.jpg')); ?>"
                                                            alt="Card image">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-header">
                                                            <h5 class="card-title mb-0">Band / Akustik</h5>
                                                            <h5 class="card-title mb-0"><b>IDR 6.000.000</b></h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text mb-2">- 2 Orang Penyanyi (P&L)</p>
                                                            <p class="card-text mb-2">- Gitar</p>
                                                            <p class="card-text mb-2">- Bass</p>
                                                            <p class="card-text mb-2">- Drum</p>
                                                            <p class="card-text mb-2">- Sexophone / Biola</p>
                                                            <p class="card-text mb-2">- Sound Sistem 5000 watt</p>
                                                            <p class="card-text mb-2">- Diesel</p>
                                                            <p class="card-text"><small class="text-muted">Start
                                                                    Performance
                                                                    10.00-16.00 WIB</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end row -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end add -->


                <!-- start upacara adat -->
                <section class="section bg-light py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-muted">
                                    <div class="text-center mb-5">
                                        <h3 class="mb-3 fw-semibold">UPACARA ADAT </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper upacara " dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!--upacara adat1-->
                                        <div class="col-xl-12" id="card-none1">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h6 class="card-title mb-0">Mapag Calon Panganten</h6>
                                                            <h6 class="card-title mb-0"><b>IDR 3.500.000</b></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body collapse show" id="collapseexample1">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Suling
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Biola
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Juru Kawi/sinden
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Penari 6 Orang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- upacara adat1 -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- upacara adat2 -->
                                        <div class="col-xl-12" id="card-none2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h6 class="card-title mb-0">Mapag Panganten + Tari Rampak
                                                                Badaya</h6>
                                                            <h6 class="card-title mb-0"><b>IDR 4.500.000</b></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body collapse show" id="collapseexample1">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Suling
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Biola
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Juru Kawih/sinden
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Penari 7 Orang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Tari Badaya
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- upacara adat2 -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- upacara adat3 -->
                                        <div class="col-xl-12" id="card-none3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h6 class="card-title mb-0">Mapag Panganten + Tari Rampak
                                                                Kendang</h6>
                                                            <h6 class="card-title mb-0"><b>IDR 4.500.000</b></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body collapse show" id="collapseexample1">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Suling
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Biola
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Juru Kawih/sinden
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Penari 7 Orang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Tari Rampak Kendang
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- upacara adat3 -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- upacara adat4 -->
                                        <div class="col-xl-12" id="card-none3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h6 class="card-title mb-0">Mapag Panganten + Tari Rampak
                                                                Kendang +
                                                                Rama Sinta</h6>
                                                            <h6 class="card-title mb-0"><b>IDR 5.000.000</b></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body collapse show" id="collapseexample1">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Suling
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Biola
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Juru Kawih/sinden
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Penari 7 Orang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Tari Rampak Kendang
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Tari Rama Sinta
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- upacara adat4 -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- upacara adat5 -->
                                        <div class="col-xl-12" id="card-none3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h6 class="card-title mb-0">Siraman</h6>
                                                            <h6 class="card-title mb-0"><b>IDR 1.500.000</b></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body collapse show" id="collapseexample1">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Pemandu
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 text-muted">Suling
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- upacara adat5 -->
                                    </div>

                                </div>
                            </div>






                        </div><!-- end row -->
                    </div><!-- end row -->
                </section>
                <!-- end upacara adat -->

                <!-- start review -->
                <section class="section bg-soft-primary" id="reviews">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                                <div class="swiper responsive-swiper rounded gallery-light pb-4">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup"
                                                        href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>"
                                                        title="">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>"
                                                            alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href=""
                                                                class="text-body text-truncate">Ron Mackie</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                    2.2K
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                    1.3K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup"
                                                        href="<?php echo e(URL::asset('assets/images/small/img-2.jpg')); ?>"
                                                        title="">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="<?php echo e(URL::asset('assets/images/small/img-2.jpg')); ?>"
                                                            alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Working at a coffee shop</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href=""
                                                                class="text-body text-truncate">Nancy Martino</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                    3.2K
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                    1.1K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-box card mb-0">
                                                <div class="gallery-container">
                                                    <a class="image-popup"
                                                        href="<?php echo e(URL::asset('assets/images/small/img-10.jpg')); ?>"
                                                        title="">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="<?php echo e(URL::asset('assets/images/small/img-10.jpg')); ?>"
                                                            alt="">
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Fun day at the Hill Station</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href=""
                                                                class="text-body text-truncate">Henry Baird</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                    632
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                    95
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup"
                                                        href="<?php echo e(URL::asset('assets/images/small/img-4.jpg')); ?>"
                                                        title="">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="<?php echo e(URL::asset('assets/images/small/img-4.jpg')); ?>"
                                                            alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Drawing a sketch</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href=""
                                                                class="text-body text-truncate">Jason McQuaid</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                    825
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                    101
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup"
                                                        href="<?php echo e(URL::asset('assets/images/small/img-6.jpg')); ?>"
                                                        title="">
                                                        <img class="gallery-img img-fluid mx-auto"
                                                            src="<?php echo e(URL::asset('assets/images/small/img-6.jpg')); ?>"
                                                            alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Project discussion with team</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href=""
                                                                class="text-body text-truncate">Erica Kernan</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                    3.4K
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i
                                                                        class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                    1.3k
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-dark"></div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end review -->


                <!-- start Work Process -->
                <section class="section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">Our Work Process maheswari</h3>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="process-arrow-img d-none d-lg-block">
                                        <img src="<?php echo e(URL::asset('assets/images/landing/process-arrow-img.png')); ?>"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="ri-quill-pen-line"></i>
                                        </div>
                                    </div>

                                    <h5>Tell us what you need</h5>
                                    <p class="text-muted ff-secondary">The profession and the employer and your desire to
                                        make
                                        your mark.</p>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="process-arrow-img d-none d-lg-block">
                                        <img src="<?php echo e(URL::asset('assets/images/landing/process-arrow-img.png')); ?>"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="ri-user-follow-line"></i>
                                        </div>
                                    </div>

                                    <h5>Get free quotes</h5>
                                    <p class="text-muted ff-secondary">The most important aspect of beauty was, therefore,
                                        an
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
                                    <p class="text-muted ff-secondary">We quickly learn to fear and thus automatically
                                        avoid
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
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body text-center p-4">
                                            <div class="avatar-xl mx-auto mb-4 position-relative">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar1.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
                                                <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                                    class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                                    <div class="avatar-title bg-transparent">
                                                        <i class="ri-mail-fill align-bottom"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end card body -->
                                            <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                    class="text-body">Dedi
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar2.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
                                                <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                                    class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                                    <div class="avatar-title bg-transparent">
                                                        <i class="ri-mail-fill align-bottom"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end card body -->
                                            <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                    class="text-body">Izzal
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar3.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
                                                <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                                    class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                                    <div class="avatar-title bg-transparent">
                                                        <i class="ri-mail-fill align-bottom"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end card body -->
                                            <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                    class="text-body">Rifa
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar4.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
                                                <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                                    class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                                    <div class="avatar-title bg-transparent">
                                                        <i class="ri-mail-fill align-bottom"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end card body -->
                                            <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                    class="text-body">Didit
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar5.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
                                                <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                                    class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                                    <div class="avatar-title bg-transparent">
                                                        <i class="ri-mail-fill align-bottom"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end card body -->
                                            <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                    class="text-body">Anisa
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar6.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
                                                <a href="<?php echo e(URL::asset('/apps-mailbox')); ?>"
                                                    class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                                    <div class="avatar-title bg-transparent">
                                                        <i class="ri-mail-fill align-bottom"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end card body -->
                                            <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                    class="text-body">Akbar
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar7.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
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
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar8.jpg')); ?>"
                                                    alt="" class="img-fluid rounded-circle">
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
                                        <a href="<?php echo e(URL::asset('/pages-team')); ?>" class="btn btn-primary">View All
                                            Members
                                            <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
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
                        <div class=" mb-5">
                            <div class="row gy-4">
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mt-4">
                                            <h5 class="fs-13 text-muted text-uppercase">Office Address:</h5>
                                            <div class="ff-secondary fw-semibold">Perum Panorama Asri, Jl. Gorontalo
                                                No.14<br />Kecamatan Sukahaji <br> Kabupaten Majalengka</div>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                            <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                                            <br>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                    class="ri-facebook-fill fs-16"></i></button>
                                            <button type="button"
                                                class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                    class="ri-instagram-fill fs-16"></i></button>
                                            <button type="button"
                                                class="btn btn-info btn-icon waves-effect waves-light"><i
                                                    class="ri-whatsapp-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-12">
                                    <div>
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <div>
                                                    <iframe class="gmaps"
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.552200589918!2d108.26807868885498!3d-6.824186699999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f256e1dea3cad%3A0x5989ed5e51590dbc!2sPerumahan%20Panorama%20Asri%20Majalengka!5e0!3m2!1sid!2sid!4v1668756542860!5m2!1sid!2sid"
                                                        style="border:0;" allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div><!-- end card-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>
                </section>
                <!-- end contact -->

                <!-- Start footer -->
                <footer class="custom-footer bg-dark py-2 position-relative">
                    <div class="container">
                        <div class="row text-center text-sm-start align-items-center mt-4">
                            <div class="col-sm-6">
                                <div>
                                    <p class="copy-rights mb-0">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> <br> M A H E S W R I E N T E R P R I S E
                                    </p>
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
            <script src="<?php echo e(URL::asset('assets/libs/gmaps/gmaps.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('assets/js/pages/gmaps.init.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/libs/prismjs/prismjs.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/assets/js/pages/swiper.init.js')); ?>"></script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\kp-maheswarienterprise\resources\views/landing.blade.php ENDPATH**/ ?>