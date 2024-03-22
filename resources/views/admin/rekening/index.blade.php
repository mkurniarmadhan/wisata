<x-app-layout>


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">DATA PESANAN</h1>


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
                                <th>NAMA PEMILIK</th>
                                <th>Nama Bank </th>
                                <th>NO REKENING</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NAMA PEMILIK</th>
                                <th>Nama Bank </th>
                                <th>NO REKENING</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                        <tbody>


                            @foreach ($data_rekening as $rekening)
                                <tr>
                                    <td>{{ $rekening->nama_pemilik }}</td>
                                    <td>{{ $rekening->nama_bank }}</td>
                                    <td>{{ $rekening->nomor_rekening }}</td>

                                    <td>{{ $rekening->status }}</td>
                                    <td><a href="{{ route('admin.rekening.show', $rekening) }}"
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
