<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        // ambil absen terakhir
        $absenTerakhir = DB::select("SELECT jam_datang, jam_pulang, created_at FROM absensi WHERE toko = '" . $user->Karyawan->kode_toko . "' AND nik = '" . $user->Karyawan->nik . "' ORDER BY docno DESC");


        if($absenTerakhir){
            // jika sudah absen masuk dan belum absen pulang
            $absenTerakhir = $absenTerakhir[0]; // ambil hanya jam datang
            if( $absenTerakhir->jam_pulang == null ){
                return redirect('/dashboard')->with('success', 'Anda sudah absen hari ini!');
            }

            // cek absensi hari ini
            $tanggal = new DateTime($absenTerakhir->created_at);
            if($tanggal->format('Y-m-d') == now()->format('Y-m-d')){
                return back()->with('success', 'Jam kerja anda sudah berakhir hari ini!');
            }
        }

        // buat docno absen
        $docno = Absensi::where('toko', $user->Karyawan->kode_toko)->orderBy('docno', 'desc')->first();
        if($docno == null){
            $docno = 0;
        } else {
            $docno = $docno->docno;
        }
        $docno = $docno + 1;


        // buat kode absensi
        $kodeAbsen = "SHF" . $user->Karyawan->shift;
        $kodeAbsen .= $user->Karyawan->kode_toko;
        $kodeAbsen .= now()->format('ymd');
        $kodeAbsen .= str_pad($docno, 7, '0', STR_PAD_LEFT);

        // cek keterlambatan
        $terlambat = false;
        if($user->Karyawan->shift == 1){
            define('JAM_ABSEN', '08:00:00');
            if(now()->format('H:m:s') > JAM_ABSEN) $terlambat = true;
        } else {
            define('JAM_ABSEN', '21:00:00');
            if(now()->format('H:m:s') > JAM_ABSEN) $terlambat = true;
        }

        $data = [
            'toko' => $user->Karyawan->kode_toko,
            'nik' => $user->Karyawan->nik,
            'kode_absen' => $kodeAbsen,
            'jenis_absen' => 1,
            'id_karyawan' => $user->Karyawan->id,
            'docno' => $docno,
            'terlambat' => $terlambat
        ];

        Absensi::create($data);
        return back()->with('success', 'Absen Datang Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $absenTerakhir = DB::select("SELECT * FROM absensi WHERE toko = '" . $user->Karyawan->kode_toko . "' AND nik = '" . $user->Karyawan->nik . "' ORDER BY docno DESC");

        // jika belum ada absen masuk
        if(!$absenTerakhir){
            return back()->with('success', 'Anda Belum Absen hari Ini!');
        }

        // jika sudah absen pulang
        if($absenTerakhir && $absenTerakhir[0]->jam_pulang != null){
            return back()->with('success', 'Anda Sudah Absen Pulang Hari Ini!');
        }

        $absenTerakhir = $absenTerakhir[0];
        $validatedData = [
            'toko' => $absenTerakhir->toko,
            'nik' => $absenTerakhir->nik,
            'kode_absen' => $absenTerakhir->kode_absen,
            'id_karyawan' => $absenTerakhir->id_karyawan,
            'docno' => $absenTerakhir->docno,
            'terlambat' => $absenTerakhir->terlambat,
            'jam_datang' => $absenTerakhir->jam_datang,
            'jam_pulang' => now()->format('H:m:s'),
            'jenis_absen' => $absenTerakhir->jenis_absen,
        ];
        Absensi::where('kode_absen', $absenTerakhir->kode_absen)->update($validatedData);
        return back()->with('success', 'Absen Pulang Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        abort(403);
    }
}
