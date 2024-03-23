<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ashion Template" />
    <meta name="keywords" content="Ashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>E WISATA TICKET</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/style.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('v.1') }}/css/login.css" type="text/css" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>

        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu End -->


    <!-- Header Section End -->

    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="/">
                            <h5>E-TIKET WISATA</h5>
                        </a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-10">
                    <nav class="header__menu p-0">
                        <div class="footer__newslatter  mt-3">
                            <form action="#">
                                <input disabled type="text" placeholder="TIKET WISATA" />

                            </form>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-2 col-xl-3">
                    <nav class="header__menu">
                        <ul>
                            @auth
                                <li>
                                    <a href="#"> <i class="fa fa-user"></i>
                                        {{ Auth::user()->namaLengkap }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('homepage.invoice') }}" class="btn btn-sm btn-primary">Tiket
                                                Saya </a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="post" class="m-3">
                                                @csrf

                                                <button class="btn btn-sm btn-danger">Keluar</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>


                            @endauth

                            @guest
                                <li>
                                    <a href="{{ route('login') }}" class="cart-btn d-block px-4">
                                        Login</a>
                                </li>
                            @endguest


                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Banner Section End -->

    <section class="banner set-bg"
        data-setbg="https://liburanyuk.co.id/wp-content/uploads/2020/12/@sisitimur-.-819x1024.jpg"
        style="background-image: url(https://liburanyuk.co.id/wp-content/uploads/2020/12/@sisitimur-.-819x1024.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span class="text-white">E-TIKET</span>
                                <h1 class="text-white">Website Wisata Danau Weekuri</h1>
                                <a href="#" class="text-white">HARGA TIKET MASUK Rp. 10.000 </a>
                            </div>
                        </div>

                        <h6>
                            <span class="text-white">
                                Danau Weekuri merupakan tempat wisata air asin yang terletak di Desa Kalena Rongo,
                                Kecamatan Kodi Utara, Kabupaten Sumba Barat Daya, Nusa Tenggara Timur.
                                Danau Weekuri terletak sekitar 60 kilometer dari ibu kota kabupaten, Tambolaka.Nama
                                Weekuri berasal dari bahasa Sumba Wee yang berarti air dan kuri yang berarti parutan
                                atau percikan.
                                Danau Weekuri dipercaya terbentuk dari air laut yang terpercik melalui karang sehingga
                                menembus ke daratan.
                            </span>
                        </h6>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WISAT Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>Daftar Wisata</h4>
                    </div>
                </div>

            </div>
            <div class="row property__gallery">

                @foreach ($wisatas as $wisata)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ $wisata->foto }}">
                                <div class="label new">{{ $wisata->tarifMasuk }}</div>
                            </div>
                            <div class="product__item__text ">
                                <div class="product__price">
                                    <a href="{{ route('homepage.show', $wisata) }}">{{ $wisata->namaWisata }}
                                    </a>
                                </div>
                                <h6 class="text-bold"> <i class="me-3 fa fa-map-pin"></i>{{ $wisata->lokasiWisata }}
                                </h6>
                                <h6 class="text-bold">{{ $wisata->deskripsiWisata }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Product Section End -->



    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#">

                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



    <!-- Js Plugins -->
    <script src="{{ asset('v.1') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('v.1') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('v.1') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('v.1') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('v.1') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('v.1') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('v.1') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('v.1') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('v.1') }}/js/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('v.1') }}/js/main.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>


    <script>
        // Register the plugin with FilePond
        FilePond.registerPlugin(FilePondPluginImagePreview);

        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create the FilePond instance
        const pond = FilePond.create(inputElement, {
            storeAsFile: true
        });
    </script>

    @stack('script')



</body>

</html>
