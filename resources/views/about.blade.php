@extends('layout.main')

@section('container')
<main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero2.png">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Tentang Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About Area  -->
    <section class="about-area2 section-padding40">
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
                            <h2>Sejarah Perusahaan Kami</h2>
                        </div>
                        <p class="mb-20">
                            Usaha laundry merupakan jasa yang dibutuhkan oleh masyarakat karena dapat membantu membersihkan pakaian, sepatu, dan tas yang kotor. Meskipun pasti dibutuhkan oleh masyarakat, tentu melakukan promosi tetap harus dilakukan. 
                        </p>
                        <p class="mb-30">Tujuannya supaya lebih banyak orang tahu mengenai jasa yang Anda tawarkan, jadi mereka tidak hanya lewat begitu saja tanpa mengerti keberadaan tempat cuci tersebut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
</main>
</div>
</div>

@include('partials.footer')

<!-- Scroll Up -->
<div id="back-top" >
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection