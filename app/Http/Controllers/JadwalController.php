<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Infrastruktur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all()->map(function ($item) {
            if ($item->bulan == '1') {
                $item->bulan = 'Januari';
            }
            if ($item->bulan == '2') {
                $item->bulan = 'Februri';
            }
            if ($item->bulan == '3') {
                $item->bulan = 'Maret';
            }
            if ($item->bulan == '4') {
                $item->bulan = 'April';
            }
            if ($item->bulan == '5') {
                $item->bulan = 'Mei';
            }
            if ($item->bulan == '6') {
                $item->bulan = 'Juni';
            }
            if ($item->bulan == '7') {
                $item->bulan = 'Juli';
            }
            if ($item->bulan == '8') {
                $item->bulan = 'Agustus';
            }
            if ($item->bulan == '9') {
                $item->bulan = 'September';
            }
            if ($item->bulan == '10') {
                $item->bulan = 'Oktober';
            }
            if ($item->bulan == '11') {
                $item->bulan = 'November';
            }
            if ($item->bulan == '12') {
                $item->bulan = 'Desember';
            }
            return $item;
        });
        return view('backend.jadwal.index', compact('data'));
    }

    public function add()
    {
        $infrastruktur = Infrastruktur::get();
        return view('backend.jadwal.add', compact('infrastruktur'));
    }

    public function save(Request $req)
    {
        $s = new Jadwal;
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->status = $req->status;
        $s->bulan = $req->bulan;
        $s->tahun = $req->tahun;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/jadwal');
    }

    public function edit($id)
    {
        $infrastruktur = Infrastruktur::get();
        $data = Jadwal::find($id);
        return view('backend.jadwal.edit', compact('data', 'infrastruktur'));
    }

    public function update(Request $req, $id)
    {
        $s = Jadwal::find($id);
        $s->infrastruktur_id = $req->infrastruktur_id;
        $s->tanggal = $req->tanggal;
        $s->status = $req->status;
        $s->bulan = $req->bulan;
        $s->tahun = $req->tahun;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/jadwal');
    }

    public function delete($id)
    {
        $delete = Jadwal::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
