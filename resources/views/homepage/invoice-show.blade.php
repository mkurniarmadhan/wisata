<x-homepage-layout>


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('homepage.invoice') }}">invoice</a>

                        <span>{{ $order->id }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Invoice Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="checkout__order">
                        <h5>INVOICE</h5>

                        <div class="checkout__order__product">
                            <ul>
                                <li>Nama Pemesan</li>
                                <li>
                                    <span class="top__text">{{ $order->namaPemesan }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="checkout__order__product">
                            <ul>
                                <li>Tiket</li>
                                <li>
                                    <span class="top__text">{{ $order->wisata->namaWisata }} untuk
                                        @ {{ $order->jumlahTiket }}tiket
                                    </span>
                                </li>

                            </ul>
                        </div>
                        <div class="checkout__order__total">
                            <ul>
                                <li>Total Bayar <span>Rp {{ $order->totalBayar }}</span></li>
                            </ul>
                        </div>



                        @if (!$order->buktiBayar)
                            <form action="{{ route('homepage.uploadBuktiBayar', $order) }}" method="POST"
                                class="checkout__form" enctype="multipart/form-data">
                                @csrf
                                <label for="">Upload Bukti</label>
                                <input type="file" name="buktiBayar" class="image-preview-filepond"
                                    accept="image/png, image/jpeg, image/jpg, image/gif" required />
                                <button class="site-btn">Kirim</button>
                            </form>
                        @endif




                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="tickets-container">
                        <h5>DAFTAR TIKET</h5>

                        @if ($order->statusBayar != 1)
                            <div class="conf">
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>Catatan Pesanan</li>
                                        <li>
                                            <span class="top__text">

                                                @if (!$order->buktiBayar)
                                                    Silahkan melakukan pembayaran pada rekening yang tertera dibawah
                                                    (Setelah transfer
                                                    WAJIB konfirmasi pembayaran anda). Silahkan klik konfirmasi,untuk
                                                    langkah selanjutnya.
                                                @else
                                                    @if (!$order->statusBayar)
                                                        Permintaan anda sudah dikirim
                                                        <a target="_blank"
                                                            href="https://api.whatsapp.com/send/?phone=6282144892035&text=hallo%20Admin%0AKONFIRMASI%20PEMESANAN%0A%0ANO%20PEMESANAN%0A{{ $order->id }}%0A%0A">KONFIRMASI
                                                            KE ADMIN</a>
                                                    @endif

                                                @endif
                                            </span>
                                        </li>
                                    </ul>

                                </div>
                                @if (!$order->buktiBayar)
                                    <div class="checkout__order__product">
                                        <ul>
                                            <li>
                                                <span class="top__text">
                                                    THOMAS AQUINAS EFRIANO NGONGO
                                                    <br>
                                                    BANK BRI
                                                    <br>
                                                    3579 0103 7609 536

                                                </span>
                                            </li>

                                        </ul>

                                    </div>
                                @endif
                            </div>
                        @else
                        @endif
                        @if ($order->statusBayar != 0)
                            <ul class="tickets-list">
                                @foreach ($order->tikets as $tiket)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <div class="ticket-user col-md-6 col-sm-12">

                                                <span class="user-at"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-ticket" viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z" />
                                                    </svg></span>
                                                <span class="user-name">{{ $tiket->id }}</span>
                                            </div>

                                            <div class="ticket-type  col-md-6 col-sm-6 col-xs-12">
                                                <span class="divider hidden-xs"></span>
                                                <span class="type">{{ $order->wisata->namaWisata }}</span>
                                            </div>
                                            <div
                                                class="ticket-state  {{ $tiket->status ?? true ? 'bg-palegreen' : 'bg-darkorange' }}  ">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach



                            </ul>

                        @endif



                    </div>



                </div>

            </div>
        </div>

    </section>
    <!-- Invoice Section End -->

    @push('script')
        <style>
            .tickets-container .tickets-list .ticket-item .ticket-state i {
                font-size: 13px;
                color: #fff;
                line-height: 20px;
            }

            .tickets-container .tickets-list .ticket-item .ticket-state {
                position: absolute;
                top: 13px;
                right: -12px;
                height: 24px;
                width: 24px;
                -webkit-border-radius: 50%;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 50%;
                -moz-background-clip: padding;
                border-radius: 50%;
                background-clip: padding-box;
                background-color: #e5e5e5;
                text-align: center;
                -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .2);
                -moz-box-shadow: 0 0 3px rgba(0, 0, 0, .2);
                box-shadow: 0 0 3px rgba(0, 0, 0, .2);
                border: 2px solid #fff;
            }

            .bg-palegreen {
                background-color: #a0d468 !important;
            }

            .tickets-container .tickets-list .ticket-item .ticket-type .type {
                color: #999;
                font-size: 11px;
                text-transform: uppercase;
            }

            .tickets-container .tickets-list .ticket-item .ticket-type {
                line-height: 30px;
                height: 50px;
                padding: 10px;
            }

            .tickets-container .tickets-list .ticket-item .ticket-time i {
                color: #ccc;
                width: 50px;
            }

            .tickets-container .tickets-list .ticket-item .divider {
                position: absolute;
                top: 0;
                left: 0;
                height: 50px;
                width: 1px;
                background-color: #eee;
                display: inline-block;
            }

            .tickets-container .tickets-list .ticket-item .ticket-time {
                line-height: 30px;
                height: 50px;
                padding: 10px;
            }

            .tickets-container .tickets-list .ticket-item .ticket-user .user-company {
                margin-left: 2px;
                color: #999;
            }

            .tickets-container .tickets-list .ticket-item .ticket-user .user-at {
                margin-left: 2px;
                color: #ccc;
                font-size: 13px;
            }

            .tickets-container .tickets-list .ticket-item .ticket-user .user-name {
                margin-left: 5px;
                font-size: 13px;
            }

            .tickets-container .tickets-list .ticket-item .ticket-user .user-avatar {
                width: 30px;
                height: 30px;
                -webkit-border-radius: 3px;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 3px;
                -moz-background-clip: padding;
                border-radius: 3px;
                background-clip: padding-box;
            }

            .tickets-container .tickets-list .ticket-item .ticket-user {
                height: 50px;
                padding: 10px;
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
            }

            .tickets-container .tickets-list .ticket-item {
                position: relative;
                background-color: #fff;
                -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .2);
                -moz-box-shadow: 0 0 3px rgba(0, 0, 0, .2);
                box-shadow: 0 0 3px rgba(0, 0, 0, .2);
                -webkit-border-radius: 3px;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 3px;
                -moz-background-clip: padding;
                border-radius: 3px;
                background-clip: padding-box;
                margin-bottom: 8px;
                padding: 0 15px;
                vertical-align: top;
            }

            .tickets-container .tickets-list {
                list-style: none;
                padding: 0;
                margin-bottom: 0;
            }

            .tickets-container {
                position: relative;
                padding: 25px 25px;
                background-color: #f5f5f5;
            }

            .widget-main.no-padding {
                padding: 0;
            }

            .widget-main {
                padding: 12px;
            }

            .no-padding {
                padding: 0 !important;
            }

            .widget-body {
                background-color: #fbfbfb;
                -webkit-box-shadow: 1px 0 10px 1px rgba(0, 0, 0, .3);
                -moz-box-shadow: 1px 0 10px 1px rgba(0, 0, 0, .3);
                box-shadow: 1px 0 10px 1px rgba(0, 0, 0, .3);
            }

            .widget-header>.widget-caption {
                line-height: 33px;
                padding: 0;
                margin: 0;
                float: left;
                text-align: left;
                font-weight: 400 !important;
                font-size: 13px;
            }

            .widget-header .widget-icon {
                display: block;
                width: 30px;
                height: 32px;
                position: relative;
                float: left;
                font-size: 111%;
                line-height: 32px;
                text-align: center;
                margin-left: -10px;
            }

            .themesecondary {
                color: #5bc0de !important;
            }

            .widget-header.bordered-bottom {
                border-bottom: 3px solid #fff;
            }

            .widget-header {
                position: relative;
                min-height: 35px;
                background: #fff;
                -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, .3);
                -moz-box-shadow: 0 0 4px rgba(0, 0, 0, .3);
                box-shadow: 0 0 4px rgba(0, 0, 0, .3);
                color: #555;
                padding-left: 12px;
                text-align: right;
            }

            .bordered-themesecondary {
                border-color: #5bc0de !important;
            }

            .widget-box {
                padding: 0;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                margin: 3px 0 30px 0;
            }
        </style>
    @endpush
</x-homepage-layout>
