<?php
use app\Http\Helpers\Hitung as Hitung;
use Illuminate\Support\Carbon;
use App\Models\Karyawan;
use Illuminate\Support\Facades\DB;

function format_uang($angka){
    return number_format($angka, 0, ',', '.');
}

function terbilang($angka){

    $hitung = new Hitung();
    $angka = intval($angka);
    $baca = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');

    if ($angka < 12) {
        $terbilang = $baca[$angka];
    } elseif ($angka >= 12 && $angka < 20) {
        $terbilang = $baca[$angka - 10] . " belas";
    } elseif ($angka >= 20 && $angka < 100) {
        $terbilang = $baca[intval($angka / 10)] . ' puluh ' . terbilang($angka - intval($angka / 10) * 10);
    } elseif ($angka >= 100 && $angka < 1000) {
        $terbilang = $hitung->ratusan($angka);
    } elseif ($angka >= 1000 && $angka < 1000000) {
        $terbilang = $hitung->ribuan($angka);
    } elseif ($angka >= 1000000 && $angka < 1000000000) {
        $terbilang = $hitung->jutaan($angka);
    } elseif ($angka >= 1000000000 && $angka < 1000000000000) {
        $terbilang = $hitung->miliaran($angka);
    } else {
        $terbilang = '';
    }

    return $terbilang;
}

function tanggal_indonesia($tgl){
    return Carbon::parse($tgl)->translatedFormat('l, d F Y');
}

function nama_perusahaan(){
    return "Horizon Tech";
    // return "Tiga Warna";
}

function userActive(){
    $nik = auth()->user()->nik;

    return DB::table('karyawan')->where('nik', $nik)
    ->join('jabatan', 'karyawan.jabatan', '=', 'jabatan.id')
    ->select('karyawan.*', 'jabatan.nama_jabatan')
    ->get();
}

function getUserRole(){
    return auth()->user()->level;
}

function getAbsenTerakhir(){
    $user = auth()->user();

    $absenTerakhir = DB::select("SELECT kode_absen FROM absensi WHERE toko = '" . $user->Karyawan->kode_toko . "' AND nik = '" . $user->Karyawan->nik . "' ORDER BY docno DESC");

    $absenTerakhir = $absenTerakhir[0];
    return $absenTerakhir;
}
