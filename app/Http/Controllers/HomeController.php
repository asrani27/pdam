<?php

namespace App\Http\Controllers;

use App\Bibit;
use App\Barang;
use App\Departemen;
use App\Infrastruktur;
use App\Pengguna;
use App\Penjualan;
use App\Rekanan;
use App\Teknisi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $i = Infrastruktur::count();
        $r = Rekanan::count();
        $d = Departemen::count();
        $t = Teknisi::count();
        return view('backend.home', compact('i', 'r', 'd', 't'));
    }
}
