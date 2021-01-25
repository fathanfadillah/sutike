@extends('layouts.app')

@section('header')
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-uppercase text-white mt-5 mb-2 text-center">SHOPPING CART</h1>
          <!-- <h4 class="font-weight-bold text-center text-white">Casket</h4> -->
          <p class="lead mb-5 text-white text-center">
              <!-- Kami menyediakan layanan pengawetan jenazah yaitu formalin jenazah dengan berbagai variasi aroma. -->
              Kami menyediakan peti jenazah dengan berbagai variasi bentuk serta aksesoris
          </p>
        </div>
      </div>
    </div>
</header>
@endsection

@section('content')
<!-- <section id="formula">
   <h4 class="font-weight-bold mb-sm-5 text-center">Class 1</h4>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto"><hr>
                 Swiper 
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                             <img
                                src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/segi4_dewa.png') }}"
                                alt="dewa"
                                class="img-fluid rounded"
                                title="dewa"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Segi 4 Dewa</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/segi4_perjamuan_terakhir1.png') }}"
                                alt="perjamuan_terakhir1"
                                class="img-fluid rounded"
                                title="Perjamuan Terakhir 1"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold ">Perjamuan</h2>
                                <h2 class="text-monospace font-weight-bold ">Terakhir 1</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/segi4_perjamuan_terakhir2.png') }}"
                                alt="perjamuan_terakhir2"
                                class="img-fluid rounded"
                                title="Perjamuan Terakhir 2"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Perjamuan</h2>
                                <h2 class="text-monospace font-weight-bold">Terakhir 2</h2>
                            </div>
                        </div>
                    </div>
                    <br><br>
                     Add Pagination 
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="cargo">
<div class="col-lg-11 mx-auto"><h4 class="font-weight-bold">Class 1</h4><hr></div>
<div id="container">
    <div class="offset-sm-1 col-md-10">
            <div class="row"> 
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_8dewa1.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_8dewa1-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">Peti Jenazah Miami segi-4 8 Dewa</a></h3>
                                <div class="price">
                                    Rp 2.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                
            <div class="col-md-3">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_perjamuan_terakhir1.png') }}">
                            <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_perjamuan_terakhir1-mirror.png') }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">peti jenazah miami segi4 perjamuan terakhir</a></h3>
                        <div class="price">
                                    Rp 4.000.000
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="col-md-3 col-sm-5">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_perjamuan_terakhir2.png') }}">
                        <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_perjamuan_terakhir2-mirror.png') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                    </ul>
                   <!-- <span class="product-new-label">New</span> -->
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">peti jenazah miami segi-4 perjamuan terakhir</a></h3>
                    <div class="price">
                                    Rp 4.500.000
                        <!-- <span>$75.00</span> -->
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_8dewa1.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 1/miami-golden-gate/peti_jenazah_miami_segi4_8dewa1-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">Peti Jenazah Miami segi-4 8 Dewa</a></h3>
                                <div class="price">
                                    Rp 2.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
     </div>
     
    </div>
</div>

<div class="col-lg-11 mx-auto mt-lg-5"><h4 class="font-weight-bold">Class 2</h4><hr></div>
<div id="container">
    <div class="offset-sm-1 col-md-10">
            <div class="row"> 
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 2/bambino_segi4_1.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 2/bambino_segi4_1-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">bambino segi-4</a></h3>
                                <div class="price">
                                    Rp 4.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                
            <div class="col-md-3">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 2/dakota-golden-gate/segi4_8dewa.png') }}">
                            <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 2/dakota-golden-gate/segi4_8dewa-mirror.png') }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">segi-4 8 dewa</a></h3>
                        <div class="price">
                                    Rp 8.000.000
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star-half"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-5">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 2/dakota-golden-gate/segi4_perjamuan_terakhir1.png') }}">
                            <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 2/dakota-golden-gate/segi4_perjamuan_terakhir1-mirror.png') }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                        </ul>
                    <!-- <span class="product-new-label">New</span>-->
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">segi-4 perjamuan terakhir 2 </a></h3>
                        <div class="price">
                                    Rp 5.500.000
                            <!-- <span>$75.00</span> -->
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-5">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 2/dakota-golden-gate/segi4_perjamuan_terakhir2.png') }}">
                            <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 2/dakota-golden-gate/segi4_perjamuan_terakhir2-mirror.png') }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                        </ul>
                    <!-- <span class="product-new-label">New</span>-->
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">segi-4 perjamuan terakhir 2</a></h3>
                        <div class="price">
                                    Rp 6.000.000
                            <!-- <span>$75.00</span> -->
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>
        
     </div>
     
    </div>
</div>

<div class="col-lg-11 mx-auto mt-lg-5"><h4 class="font-weight-bold">Class 3</h4><hr></div>
<div id="container">
    <div class="offset-sm-1 col-md-10">
            <div class="row"> 
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">Standard</a></a></h3>
                                <div class="price">
                                    Rp 12.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">Standard</a></a></h3>
                                <div class="price">
                                    Rp 12.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">Standard</a></a></h3>
                                <div class="price">
                                    Rp 12.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/class 3/standard/standard-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">Standard</a></a></h3>
                                <div class="price">
                                    Rp 12.000.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            
        
     </div>
     
    </div>
</div>

<div class="col-lg-11 mx-auto mt-lg-5"><h4 class="font-weight-bold">Premium</h4><hr></div>
<div id="container">
    <div class="offset-sm-1 col-md-10">
            <div class="row"> 
                <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/premium/adams.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/premium/adams-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">adams</a></h3>
                                <div class="price">
                                    Rp.15.500.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                
            <div class="col-md-3">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('assets/images/catalog/casket/premium/president.png') }}">
                            <img class="pic-2" src="{{ asset('assets/images/catalog/casket/premium/president-mirror.png') }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">president</a></h3>
                        <div class="price">
                            Rp.18.900.000
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                   <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('assets/images/catalog/casket/premium/adams.png') }}">
                                <img class="pic-2" src="{{ asset('assets/images/catalog/casket/premium/adams-mirror.png') }}">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        <!-- <span class="product-new-label">New</span> -->
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="#">adams</a></h3>
                                <div class="price">
                                    Rp.15.500.000
                                    <!-- <span>$75.00</span> -->
                                </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                
            <div class="col-md-3">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('assets/images/catalog/casket/premium/president.png') }}">
                            <img class="pic-2" src="{{ asset('assets/images/catalog/casket/premium/president-mirror.png') }}">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">president</a></h3>
                        <div class="price">
                            Rp.18.900.000
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        
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
