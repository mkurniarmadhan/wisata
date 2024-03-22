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
                                <th colspan="2">NO PESANAN </th>
                                <th colspan="2">{{ $order->id }} </th>


                            </tr>
                            <tr>
                                <th colspan="2">Bukti Bayar </th>
                                <th colspan="2">

                                    @if ($order->buktiBayar)
                                        <button class="btn btn-md btn-success" data-toggle="modal"
                                            data-target="#buktiModal">
                                            BUkti Bayar
                                        </button>
                                    @else
                                        -
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>NAMA PEMESAN</th>
                                <th>KODE PESANAN</th>
                                <th>JUMLAH TIKET</th>
                                <th>opsi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td>{{ $order->namaPemesan }}</td>
                                <td>{{ $order->wisata->namaWisata }}</td>
                                <td>{{ $order->jumlahTiket }}</td>
                                <td>

                                    @if ($order->buktiBayar != null)

                                        @if ($order->statusBayar)
                                            <button disabled class="btn btn-md btn-success">
                                                Sudah di konfirmasi
                                            </button>
                                        @else
                                            <button class="btn btn-md btn-success" data-toggle="modal"
                                                data-target="#konfirmasiModal">
                                                Konfirmasi Pesanan
                                            </button>
                                        @endif
                                    @else
                                        belum upload bukti bayar
                                    @endif


                                </td>
                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $order->id }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><b>Konfirmasi Pemesanan Tiket</b> </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ route('admin.konfirmasiPembayaran', $order) }}">Konfimasi</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buktiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $order->id }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <img src='{{ asset("images/buktiBayar/$order->buktiBayar") }}' height="40px" class="img-thumbnail">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>


                </div>
            </div>
        </div>
    </div>


</x-app-layout>
