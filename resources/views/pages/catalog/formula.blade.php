@extends('layouts.app')

@section('header')
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-uppercase text-white mt-5 mb-2 text-center">Catalog</h1>
          <h4 class="font-weight-bold text-center text-white">Formula</h4>
          <p class="lead mb-5 text-white text-center">
              Kami menyediakan layanan pengawetan jenazah yaitu formalin jenazah dengan berbagai variasi aroma.
          </p>
        </div>
      </div>
    </div>
</header>
@endsection

@section('content')
<section id="formula">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/catalog/formula/lavender.jpg') }}"
                                alt="lavender"
                                class="img-fluid rounded"
                                title="Lavender"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Lavender</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/catalog/formula/mawar.jpg') }}"
                                alt="mawar"
                                class="img-fluid rounded"
                                title="Mawar"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Mawar</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/catalog/formula/melati.jpg') }}"
                                alt="melati"
                                class="img-fluid rounded"
                                title="Melati"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Melati</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/catalog/formula/original.jpg') }}"
                                alt="original"
                                class="img-fluid rounded"
                                title="Original"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Original</h2>
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
