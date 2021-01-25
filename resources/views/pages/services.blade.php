@extends('layouts.app')

@section('header')
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-uppercase text-white mt-5 mb-2 text-center">Services</h1>
          <p class="lead mb-5 text-white text-center">
              Kami memberikan pelayanan 24 jam dengan batas waktu tercepat sehingga terciptanya pelayanan yang maksimal.
          </p>
        </div>
      </div>
    </div>
</header>
@endsection

@section('content')
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
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
                    </div>
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
                clickable: true,
            },
        });
    });
</script>
@endsection
