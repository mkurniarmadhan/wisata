<x-homepage-layout>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>

                        <span>LOGIN</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <form action="{{ route('doRegister') }}" method="POST" class="checkout__form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Login </h5>
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Nama Lengkap <span>*</span></p>
                                    <input type="text" value="{{ old('namaLengkap') }}" name="namaLengkap"
                                        placeholder="masukan nama namaLengkap" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" value="{{ old('email') }}" name="email"
                                        placeholder="masukan nama email" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" value="{{ old('phone') }}" name="phone"
                                        placeholder="masukan nama phone" />
                                </div>
                            </div>
                            <div class="col-12">

                                <p>ALamat <span>*</span></p>
                                <textarea class="form-control" name="alamat" id="alamat"></textarea>

                            </div>

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Password <span>*</span></p>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter password" required="required" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Masukan Ulang Password <span>*</span></p>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Enter password" required="required" autocomplete="off">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-signin">Daftar</button>


                    </div>

                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->

    @push('script')
    @endpush

</x-homepage-layout>
