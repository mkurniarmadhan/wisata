<x-homepage-layout>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>

                        <span>pesan tiket</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <form action="{{ route('homepage.checkoutStore', $wisata) }}" method="POST" class="checkout__form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Detail Pesanan</h5>
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Nama Pemesan<span>*</span></p>
                                    <input type="text" name="namaPemesan" required
                                        placeholder="masukan nama pemesan" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Nomor Ponsel <span>*</span></p>
                                    <input type="text" required name="phone" placeholder="masukan no hp" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Pesanan</h5>
                            <div class="checkout__order__product">
                                <ul>
                                    <li>
                                        <span class="top__text">Wisata</span>
                                        <span class="top__text__right">jumlah</span>
                                    </li>
                                    <li>{{ $wisata->namaWisata }} <span>
                                            <input type="number" required placeholder="1" min="1" max="5"
                                                name="jumlahTiket"></span>x
                                        {{ $wisata->tarifMasuk }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Total Bayar <span class="cart__total"></span></li>
                                </ul>
                            </div>
                            <div class="checkout__order__widget">
                                
                            </div>

                            <input type="hidden" name="totalBayar">

                            <button class="site-btn">Beli Tiket</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->

    @push('script')
        <script>
            const harga = `{{ $wisata->tarifMasuk }}`;
            $('input[name=jumlahTiket]').change(function() {
                const q = $('input[name=jumlahTiket]').val();
                const sub = harga * q;
                $('.cart__total').html(harga * q);
                $('input[name=totalBayar]').val(sub);
            });
        </script>
    @endpush

</x-homepage-layout>
