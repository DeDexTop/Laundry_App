@extends('layout.main')

@section('container')
<main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Laundry Berkualitas Di Daerahmu!</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Kami menjamin kebersihan pakaian anda</p>
                                    <a href="/services" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Jelajahi Pelayanan Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Proses</span>
                            <h2>Beginilah cara kerja kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/services">Anda datang dengan pakaian kotor anda</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/services">Kami mencuci pakaian anda</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/services">Kurir akan mengirim pakaian bersih anda</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Layanan</span>
                            <h2>Layanan yang Kami Tawarkan</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/laundry-machine.png" alt="" class="pt-75 ml-40 mb-5 w-75">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="/services">Mencuci Kain</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon2.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="/services">Menyetrika Kain</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/ironing.png" alt="" class="pt-100 ml-50 w-75">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->

        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/laundry-image.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>Tentang Perusahaan Kami</h2>
                            </div>
                            <p class="mb-20">
                                The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!
                            </p>
                            <p class="mb-30">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>

                            <a href="/about" class="btn">Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
</main>

@include('partials.footer')

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection

