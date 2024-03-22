<x-app-layout>


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data wisata</h1>

        <a class="btn btn-success mb-3" href="{{ route('admin.wisata.create') }}">Tambah Wisata</a>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pesanan </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Wisata</th>
                                <th>Lokasi Wisata</th>
                                <th>Tarif Masuk</th>
                                <th>opsi</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Wisata</th>
                                <th>Lokasi Wisata</th>
                                <th>Tarif Masuk</th>
                                <th>opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>


                            @foreach ($wisatas as $wisata)
                                <tr>
                                    <td>{{ $wisata->namaWisata }}</td>
                                    <td>{{ $wisata->lokasiWisata }}</td>
                                    <td>{{ $wisata->tarifMasuk }}</td>
                                    <td><a href="{{ route('admin.wisata.show', $wisata) }}"
                                            class=" btn btn-md btn-success">Lihat</a></td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
