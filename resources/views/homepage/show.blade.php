<x-homepage-layout>



    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('homepage.index') }}"><i class="fa fa-home"></i> Beranda</a>
                        <span>{{ $wisata->namaWisata }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic__slider owl-carousel">
                        <img data-hash="product-1" class="product__big__img" src="{{ $wisata->foto }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{ $wisata->namaWisata }}</h3>

                        <h6 class="mb-4">Tarif Masuk : {{ number_format($wisata->tarifMasuk) }}</h6>
                        <h6> <i class="fa fa-map-pin mr-4"></i> {{ $wisata->lokasiWisata }}</h6>

                        <div class="product__details__button mt-3">
                            <a href="{{ route('homepage.checkout', $wisata) }}" class="cart-btn d-block">BELI
                                TIKET</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Deskripsi &
                                    Ketentuan</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Description</h6>
                                <p>
                                    {{ $wisata->deskripsiWisata }} </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-homepage-layout>
