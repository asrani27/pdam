<?php

namespace App\Http\Controllers;

use App\Hasil;
use App\Jadwal;
use App\Rekanan;
use App\Teknisi;
use App\Pengguna;
use App\Departemen;
use App\Pemusnahan;
use App\Pengeluaran;
use App\SerahTerima;
use App\Infrastruktur;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }
    public function departemen()
    {
        $data = Departemen::get();
        return view('print.departemen', compact('data'));
    }
    public function teknisi()
    {
        $data = Teknisi::get();
        return view('print.teknisi', compact('data'));
    }
    public function pengguna()
    {
        $data = Pengguna::get();
        return view('print.pengguna', compact('data'));
    }
    public function rekanan()
    {
        $data = Rekanan::get();
        return view('print.rekanan', compact('data'));
    }
    public function infrastruktur()
    {
        $data = Infrastruktur::get();
        return view('print.infrastruktur', compact('data'));
    }


    public function periode(Request $req)
    {
        $from = $req->mulai;
        $to = $req->sampai;

        if ($req->jenis == '1') {
            $data = Jadwal::whereBetween('tanggal', [$from, $to])->get();
            return view('print.jadwal', compact('data', 'from', 'to'));
        }
        if ($req->jenis == '2') {
            $data = Hasil::whereBetween('created_at', [$from, $to])->get();
            return view('print.hasil', compact('data', 'from', 'to'));
        }
        if ($req->jenis == '3') {
            $data = SerahTerima::whereBetween('tanggal', [$from, $to])->get();
            return view('print.serahterima', compact('data', 'from', 'to'));
        }
        if ($req->jenis == '4') {
            $data = Pemusnahan::whereBetween('tanggal', [$from, $to])->get();
            return view('print.pemusnahan', compact('data', 'from', 'to'));
        }
    }
}
