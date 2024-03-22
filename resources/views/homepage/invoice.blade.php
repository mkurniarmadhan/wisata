<x-homepage-layout>


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>

                        <span>INVOICE</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Invoice Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>Daftar Wisata KAMU</h4>
                    </div>
                </div>

            </div>
            <div class="row property__gallery">

                @foreach ($orders as $order)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ $order->wisata->foto }}">
                                <div class="label new">{{ $order->tarifMasuk }}</div>
                            </div>
                            <div class="product__item__text ">
                                <div class="product__price">
                                    <a href="{{ route('homepage.invoice.show', $order) }}">{{ $order->id }}
                                    </a>
                                </div>
                                <h6 class="text-bold"> <i class="me-3 fa fa-map-pin"></i>{{ $order->lokasiWisata }}
                                </h6>
                                <h6 class="text-bold">{{ $order->deskripsiWisata }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Invoice Section End -->


</x-homepage-layout>
