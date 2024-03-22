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
                                <th>NAMA PEMESAN</th>
                                <th>KODE PESANAN</th>
                                <th>JUMLAH TIKET</th>
                                <th>STATUS</th>
                                <th>opsi</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NAMA PEMESAN</th>
                                <th>KODE PESANAN</th>
                                <th>JUMLAH TIKET</th>
                                <th>STATUS</th>
                                <th>opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>


                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->namaPemesan }}</td>
                                    <td>{{ $order->id }}</td>

                                    <td>{{ $order->jumlahTiket }}</td>
<td>
    @if ( $order->statusBayar)
        
    <span class="badge badge-success">Sudah Di Konfirmasi</span>
    @else
    <span class="badge badge-warning">Belum Di Konfirmasi</span>
        
    @endif

</td>
                                    <td><a href="{{ route('admin.pesanan.show', $order) }}"
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
