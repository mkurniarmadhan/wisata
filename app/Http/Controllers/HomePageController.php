<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tiket;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{

    public function index()
    {
        $wisatas = Wisata::all();
        return view('homepage.index', compact('wisatas'));
    }

    public function show(Wisata $wisata)
    {

        return view('homepage.show', compact('wisata'));
    }


    public function checkout(Wisata $wisata)
    {

        return view('homepage.checkout', compact('wisata'));
    }
    public function checkoutStore(Request $request, Wisata $wisata)
    {



        $order = Order::create(
            [
                'wisata_id' => $wisata->id,
                'user_id' => Auth::id(),
                'namaPemesan' => $request->namaPemesan,
                'jumlahTiket' => $request->jumlahTiket,
                'totalBayar' => $request->totalBayar,
            ]
        );


        return to_route('homepage.invoice.show', $order);
    }


    public function invoice()
    {

        $orders = Auth::user()->orders;



        return view('homepage.invoice', compact('orders'));
    }


    public function invoiceShow(Order $order)
    {


        return view('homepage.invoice-show', compact('order'));
    }

    public function uploadBuktiBayar(Request $request, Order $order)
    {


        $buktibayar =  $request->file('buktiBayar');
        $tujuan_upload = 'images/buktiBayar';

        $name = $order->id . '.' .   $buktibayar->getClientOriginalExtension();
        $buktibayar->move($tujuan_upload, $name);

        $order->fill(['buktiBayar' => $name]);
        $order->save();


        return back();
    }
}
