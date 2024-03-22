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
                <form class="row g-3" action="{{ route('admin.wisata.store') }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    <div class="col-md-6">
                        <label for="namaWisata" class="form-label">namaWisata</label>
                        <input type="text" name="namaWisata" class="form-control" id="namaWisata">
                    </div>
                    <div class="col-md-6">
                        <label for="lokasiWisata" class="form-label">lokasi Wisata</label>
                        <input type="text" name="lokasiWisata" class="form-control" id="lokasiWisata">
                    </div>
                    <div class="col-md-6">
                        <label for="tarifMasuk" class="form-label">tarifMasuk</label>
                        <input type="text" name="tarifMasuk" class="form-control" id="tarifMasuk">
                    </div>
                    <div class="col-md-6">
                        <label for="foto" class="form-label">Gambar </label>
                        <input type="file" name="foto" class="form-control" id="foto">
                    </div>
                    <div class="col-12">
                        <label for="deskripsiWisata" class="form-label">deskripsiWisata</label>
                        <textarea name="deskripsiWisata" id="deskripsiWisata" class="form-control"></textarea>
                    </div>

                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


</x-app-layout>
