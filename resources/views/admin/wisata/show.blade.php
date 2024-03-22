<x-app-layout>


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Wisata </h1>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Wisata </h6>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-8">
                        <div class="col-12">
                            <label for="namaWisata" class="form-label">namaWisata</label>
                            <input type="text" name="namaWisata" disabled
                                value="{{ old('namaWisata') ?? $wisata->namaWisata }}" class="form-control"
                                id="namaWisata">

                        </div>
                        <div class="col-12">
                            <label for="lokasiWisata" class="form-label">lokasi Wisata</label>
                            <input type="text" name="lokasiWisata"
                                value="{{ old('lokasiWisata') ?? $wisata->lokasiWisata }}" disabled class="form-control"
                                id="lokasiWisata">
                        </div>
                        <div class="col-12">
                            <label for="tarifMasuk" class="form-label">tarifMasuk</label>
                            <input type="text" name="tarifMasuk"disabled
                                value="{{ old('tarifMasuk') ?? $wisata->tarifMasuk }}" class="form-control"
                                id="tarifMasuk">
                        </div>


                        <div class="col-12">
                            <label for="deskripsiWisata" class="form-label">deskripsiWisata</label>
                            <textarea disabled name="deskripsiWisata" id="deskripsiWisata" class="form-control">{{ old('deskripsiWisata') ?? $wisata->deskripsiWisata }}</textarea>
                        </div>

                    </div>

                    <div class="col-4">
                        <div class="col-12">

                            <img class="img-fluid" style="height: 300px; width: auto" src="{{ $wisata->foto }}"
                                alt="">
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <a href="{{ route('admin.wisata.edit', $wisata) }}" class="btn btn-primary">Edit</a>
                    </div>
                </form>
            </div>
        </div>

    </div>


</x-app-layout>
