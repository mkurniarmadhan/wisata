<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Order;
use App\Models\Rekening;
use App\Models\Tiket;
use App\Models\Wisata;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {

      

        $semuaPesanan = Order::all()->count();
        $pesananBaru = Order::whereDate('created_at', date('Y-m-d'))->count();    
        $pesananBelumSelesai = Order::where('statusBayar',0)->count();    
        $pesananSelesai = Order::where('statusBayar', 1)->count();    


        return view('admin.index', compact('semuaPesanan', 'pesananBaru','pesananBelumSelesai','pesananSelesai'));
    }

    // method untuk menampilkan data pesanan

    public function pesanan()
    {

        $orders = Order::all();
        return view('admin.pemesanan.index', compact('orders'));
    }


    // method untuk menampilkan data detail pesanan
    public function pesananShow(Order $order)
    {

        return view('admin.pemesanan.show', compact('order'));
    }



    // method untuk konfimasi pembayaran 
    public function konfirmasiPembayaran(Order $order)
    {

        for ($i = 1; $i <= $order->jumlahTiket; $i++) {
            Tiket::create(
                [
                    'order_id' => $order->id,
                ]
            );
        }
        $order->fill(['statusBayar' => 1]);
        $order->save();

        return back();
    }



    public function rekening()
    {

        $data_rekening = Rekening::all();
        return view('admin.rekening.index', compact('data_rekening'));
    }
    public function rekening_detail(Rekening $rekening)
    {

        return view('admin.rekening.index', compact('rekening'));
    }
}
