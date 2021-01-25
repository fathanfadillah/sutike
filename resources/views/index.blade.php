@extends('layouts.app')

@section('header')
<header>
    <div id="carouselBanner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
            <li data-target="#carouselBanner" data-slide-to="1"></li>
            <li data-target="#carouselBanner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url({{ asset('assets/images/banner/banner_1.jpg') }}) ">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p>
                </div> --}}
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{ asset('assets/images/banner/banner_2.jpg') }})">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p>
                </div> --}}
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{ asset('assets/images/banner/banner_3.jpg') }})">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p>
                </div> --}}
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
@endsection

@section('content')
{{-- SERVICES --}}
<section id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="counter-box colored rounded shadow-sm">
                    <i class="fas fa-users"></i><span class="counter">150</span>
                    <p>SERVICES</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="counter-box colored rounded shadow-sm">
                    <i class="fas fa-hospital"></i><span class="counter">15</span>
                    <p>PARTNER</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-box colored rounded shadow-sm">
                    <i class="fas fa-ambulance"></i><span class="counter">3</span>
                    <p>TRANSPORTATION</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT US --}}
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>About Us</h1>
                <p class="text-justify">
                    Sutike adalah pelayanan kedukaan dimana kami memberikan fasilitas, pelayanan lengkap, dan cepat serta harga yang terjangkau.
                </p>
                <div class="videoWrapper">
                    <iframe
                        width="853"
                        height="480"
                        src="https://www.youtube.com/embed/ugfCenwWhF0"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    >
                    </iframe>
                </div>
                <!-- <hr>
                <span class="text-uppercase font-weight-bolder">
                    <i class="fab fa-think-peaks"></i> Mission
                </span>
                <div class="row">
                    <div class="col">
                        <p class="text-justify">
                            Melaksanakan pelayanan secara professional sesuai kebutuhan dan keinginan pelanggan dengan standar pelayanan sesuai SOP.
                        </p>
                    </div>
                    <div class="col">
                        <p class="text-justify">
                            Mengikuti perkembangan pengetahuan untuk terus meningkatkan mutu layanan kesehatan dan menjadi sarana dibidang layanan kedukaan untuk semua golongan agama.
                        </p>
                    </div>
                </div>
                <hr>
                <p class="text-justify">
                    <span class="text-uppercase font-weight-bolder">
                        <i class="far fa-eye"></i> Vision
                    </span><br>
                    Menjadi penyedia jasa pelayanan kedukaan yang professional, bermutu, dan mengedepankan keamanan serta kenyamanan untuk keluarga berduka.
                </p>
                <hr>
                <p class="text-justify">
                    <span class="text-uppercase font-weight-bolder">
                        <i class="fas fa-hands-helping"></i> Why Choose Us?
                    </span><br>
                    <b><u>You Deserve Our Good</b></u> dari kalimat tersebut yang kami suguhkan menjelaskan bahwa Sutike memberikan pelayanan terbaik demi memberikan kesan yang baik untuk keluarga berkabung. Kami hadir untuk sepenuhnya melayani dengan memberikan penawaran berbagai fasilitas dan pelayanan terbaik yang dapat disesuaikan oleh keluarga yang berduka. Pelayanan yang kami berikan-pun 24 jam sehingga dapat mempersingkat waktu tunggu untuk keluarga berduka. Biaya yang kami berikan tersebut juga bisa disesuaikan dengan keadaan ekonomi keluarga melalui negosiasi yang sudah disepakati sehingga dapat mempercepat proses pelayanan kedukaan agar berjalan dengan semestinya.
                </p> -->
                
                <div class="row pt-3">
                    <div class="col-md-6">
                        <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                    <i class="fab fa-think-peaks"></i> Mission
                                </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                    Melaksanakan pelayanan secara professional sesuai kebutuhan dan keinginan pelanggan dengan standar pelayanan sesuai SOP. Mengikuti perkembangan pengetahuan untuk terus meningkatkan mutu layanan kesehatan dan menjadi sarana dibidang layanan kedukaan untuk semua golongan agama.
                                </p>
                            </div>

                        </div>
                        <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                    <i class="far fa-eye"></i> Vision
                                </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                Menjadi penyedia jasa pelayanan kedukaan yang professional, bermutu, dan mengedepankan keamanan serta kenyamanan untuk keluarga berduka.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                 <i class="fas fa-hands-helping"></i> Why Choose Us?
                                 </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                    <b><u>You Deserve Our Good</b></u> dari kalimat tersebut yang kami suguhkan menjelaskan bahwa Sutike memberikan pelayanan terbaik demi memberikan kesan yang baik untuk keluarga berkabung. Kami hadir untuk sepenuhnya melayani dengan memberikan penawaran berbagai fasilitas dan pelayanan terbaik yang dapat disesuaikan oleh keluarga yang berduka. Pelayanan yang kami berikan-pun 24 jam sehingga dapat mempersingkat waktu tunggu untuk keluarga berduka. Biaya yang kami berikan tersebut juga bisa disesuaikan dengan keadaan ekonomi keluarga melalui negosiasi yang sudah disepakati sehingga dapat mempercepat proses pelayanan kedukaan agar berjalan dengan semestinya.                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                
                
</section>

{{-- INTRODUCTION --}}
<section id="intro" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h1>Introduction</h1>
                <p class="lead text-right">Brand New Logo</p>
                <hr>
                <!-- <div class="col-md-5 mb-3 float-left">
                    <img
                        src="{{ asset('assets/images/logo/brand_new_logo.png') }}"
                        alt="brand_new_logo"
                        class="img-fluid rounded"
                        title="Brand New Logo"
                    >
                </div> -->
                <div class="col-md-6 float-left">
                    <h3 class="text-monospace font-weight-bold">Symbol</h3>
                    <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                    <i class="fab fa-birds"></i> BIRD
                                </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                    Melaksanakan pelayanan secara professional sesuai kebutuhan dan keinginan pelanggan dengan standar pelayanan sesuai SOP. Mengikuti perkembangan pengetahuan untuk terus meningkatkan mutu layanan kesehatan dan menjadi sarana dibidang layanan kedukaan untuk semua golongan agama.
                                </p>
                            </div>

                        </div>
                        <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                    <i class="fab fa-birds"></i>COLOR
                                </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                Warna biru diartikan sebagai komunikatif, dapat dipercaya, dan memberikan kedamaian.
                                </p>
                            </div>

                        </div>
                        <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                    <i class="fab fa-birds"></i>ZIG-ZAG LINE
                                </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                        Bergairah, semangat, dan bergerak dengan cepat.
                                </p>
                            </div>

                        </div>
                        
                </div>
                
            
                <div class="col-md-6 float-right pt-3">
                <img
                        src="{{ asset('assets/images/logo/brand_new_logo.png') }}"
                        alt="brand_new_logo"
                        class="img-fluid rounded"
                        title="Brand New Logo"
                    ><br></br>
                    <div class="product-grid3">
                            <div class="card-header bg-dark font-weight-bold text-white product-image">
                                <span class="text-uppercase font-weight-bolder">
                                    <i class="fab fa-birds"></i> BIRD & MOUNTAIN
                                </span>
                            </div>
                    
                            <div class="card-body product-content">
                                <p class="text-justify">
                                            Logo burung dan gunung memiliki arti bahwa Sutike tidak hanya dapat diakses pada wilayah tertentu saja, harapan nya Sutike dapat membantu dari wilayah Sabang dan Merauke.
                                </p>
                            </div>

                        </div>
                   
                </div>
                
            </div>
                    <!-- <div class="col-lg-9 mx-auto">
                         <div class="col-md-6 float-left">
                                <h3 class="text-monospace font-weight-bold">Symbol</h3>
                                <ul class="list-nostyle pt-3">
                                    <li>
                                        <h5 class="font-weight-lighter">BIRD</h5>
                                        <p class="text-justify border-primary table-intro-border-left">
                                            Burung memiliki simbolis yang kuat. Membawa kebahagiaan diambil dari ceritanya juga yang berarti kerja keras, disiplin, dan kejujuran.
                                            Burung adalah hewan yang dapat terbang tinggi, logo burung tersebut menjadi simbol dengan harapan bahwa perusahaan kami dapat terbang tinggi seiring perkembangan zaman.
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="font-weight-lighter">BIRD & MOUNTAIN</h5>
                                        <p class="text-justify border-primary table-intro-border-left">
                                            Logo burung dan gunung memiliki arti bahwa Sutike tidak hanya dapat diakses pada wilayah tertentu saja, harapan nya Sutike dapat membantu dari wilayah Sabang dan Merauke.
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="font-weight-lighter">ZIG-ZAG LINE</h5>
                                        <p class="text-justify border-primary table-intro-border-right">
                                            Bergairah, semangat, dan bergerak dengan cepat.
                                        </p>
                                    </li>
                                </ul>
                        </div>
                        <div class="col-md-6 float-right pt-3">
                            <img
                                    src="{{ asset('assets/images/logo/brand_new_logo.png') }}"
                                    alt="brand_new_logo"
                                    class="img-fluid rounded"
                                    title="Brand New Logo"
                                ><br></br>
                                <ul class="list-nostyle">
                                    <!-- <li>
                                        <h5 class="font-weight-lighter">ZIG-ZAG LINE</h5>
                                        <p class="text-justify border-primary table-intro-border-right">
                                            Bergairah, semangat, dan bergerak dengan cepat.
                                        </p>
                                    </li> 
                                    <li>
                                        <h5 class="font-weight-lighter">COLOR</h5>
                                        <p class="text-justify border-primary table-intro-border-right">
                                            Warna biru diartikan sebagai komunikatif, dapat dipercaya, dan memberikan kedamaian.
                                        </p>
                                    </li>
                                </ul>
                        </div>
                    </div> -->

        </div>
    </div>
</section>

{{-- OFFERS --}}
<section id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>Services We Offer</h1>
                <p class="text-justify">
                    Dalam penanganan pelayanan, kami memprioritaskan kebutuhan keluarga yang berduka demi memberikan kesan kedukaan yang lebih khidmat.
                </p>
                <hr>
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/flower.jpg') }}"
                                alt="flower"
                                class="img-fluid rounded"
                                title="Flower"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Flowers</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/cremation.jpg') }}"
                                alt="cremation"
                                class="img-fluid rounded"
                                title="Cremation"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Cremation</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/ambulance.jpg') }}"
                                alt="ambulance"
                                class="img-fluid rounded"
                                title="Ambulance"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Ambulance</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/makeup.jpg') }}"
                                alt="makeup"
                                class="img-fluid rounded"
                                title="Makeup"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Makeup</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/casket.jpg') }}"
                                alt="casket"
                                class="img-fluid rounded"
                                title="Casket"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Casket</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/funeral.jpg') }}"
                                alt="funeral"
                                class="img-fluid rounded"
                                title="Funeral"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Funeral</h2>
                            </div>
                        </div> -->
                        
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/v2/casket.png') }}"
                                alt="casket"
                                class="img-fluid rounded"
                                title="Casket"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Casket</h2>
                                <p class="text-justify">
                                    Kami menyediakan berbagai jenis peti jenazah, diantaranya bersifat keagamaan ataupun
                                    universal yang disesuaikan dengan permintaan keluarga.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/v2/funeral.png') }}"
                                alt="funeral"
                                class="img-fluid rounded"
                                title="Funeral"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Funeral</h2>
                                <p class="text-justify">
                                    Kami menyediakan pelayanan meliputi pemakaman yang disesuaikan dengan
                                    permintaan keluarga berduka di daerah Jabodetabek.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/v2/cargo.png') }}"
                                alt="cargo"
                                class="img-fluid rounded"
                                title="Cargo"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Cargo</h2>
                                <p class="text-justify">
                                    Kami menyediakan pelayanan cargo jenazah meliputi daerah Domestik dan Internasional
                                    sesuai tujuan keluarga berduka menggunakan transportasi udara, laut, dan darat.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/v2/cremation.png') }}"
                                alt="cremation"
                                class="img-fluid rounded"
                                title="Cremation"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Cremation</h2>
                                <p class="text-justify">
                                    Kami menyediakan pelayanan berupa kremasi jenazah yang dilakukan sesuai dengan
                                    permintaan keluarga berduka di daerah Jabodetabek.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/v2/preservation.png') }}"
                                alt="preservation"
                                class="img-fluid rounded"
                                title="Preservation"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Body Preservation & Formalin</h2>
                                <p class="text-justify">
                                    Kami menyediakan layanan pengawetan jenazah yaitu formalin jenazah. Aroma yang
                                    disediakan dari pelayanan tersebut terdapat 3 jenis yaitu Mawar, Melati, dan Lavender.
                                    Peracikan dilakukan oleh teknisi forensik besertifikat serta diawasi oleh Dokter Spesialis
                                    Forensik.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/v2/transportation.png') }}"
                                alt="transportation"
                                class="img-fluid rounded"
                                title="Transportation"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Transportation</h2>
                                <p class="text-justify">
                                    Sutike memiliki beberapa jenis mobil jenazah sebagai fasilitas akomodasi dalam
                                    pelayanan kedukaan. Terdapat 5 armada yang terbagi di berbagai wilayah untuk
                                    melayani keluarga berduka di daerah Jabodetabek.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/cargo/shipping_by_air.jpg') }}"
                                alt="air"
                                class="img-fluid rounded"
                                title="Air"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Shipping by air</h2>
                                <p class="text-justify">
                                    Sutike menyediakan pelayanan Cargo melalui jalur Bandara Soekarno-Hatta menuju daerah Domestik sampai dengan Internasional.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/cargo/shipping_by_road.jpg') }}"
                                alt="road"
                                class="img-fluid rounded"
                                title="Road"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Shipping by road</h2>
                                <p class="text-justify">
                                    Sutike memiliki armada mobil jenazah sebagai penunjang fasilitas pelayanan kedukaan. Pengantaran melalui mobil jenazah untuk daerah Jabodetabek menuju dalam kota, luar kota, dan luar pulau.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/cargo/shipping_by_sea.jpg') }}"
                                alt="sea"
                                class="img-fluid rounded"
                                title="Sea"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Shipping by sea</h2>
                                <p class="text-justify">
                                    Sutike menyediakan pelayanan pengiriman jenazah melalui jalur darat dan laut dengan menggunakan kapal untuk penyeberangan antar pulau.
                                </p>
                            </div>
                        </div>

                    </div>
                    <br><br>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script>
    $(document).ready(function() {
        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
        });
    });
</script>
@endsection
