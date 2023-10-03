<?php
namespace app\Http\Helpers;

class Hitung{
    public function ratusan($angka) {
        if ($angka == 100) {
            $terbilang = "seratus";
        } elseif ($angka > 100 && $angka < 200) {
            $terbilang = "seratus " . terbilang($angka - 100);
        } elseif ($angka >= 200) {
            if ($angka % 100 == 0) {
                $terbilang = terbilang(intval($angka / 100)) . ' ratus';
            } else {
                $terbilang = terbilang(intval($angka / 100)) . ' ratus ' . terbilang($angka - intval($angka / 100) * 100);
            }
        }

        return $terbilang;
    }

    public function ribuan($angka) {
        if ($angka == 1000) {
            $terbilang = "seribu";
        } elseif ($angka > 1000 && $angka < 2000) {
            $terbilang = "seribu " . terbilang($angka - 1000);
        } elseif ($angka >= 200) {
            if ($angka % 1000 == 0) {
                $terbilang = terbilang(intval($angka / 1000)) . ' ribu';
            } else {
                $terbilang = terbilang(intval($angka / 1000)) . ' ribu ' . terbilang($angka - intval($angka / 1000) * 1000);
            }
        }

        return $terbilang;
    }

    public function jutaan($angka) {
        if ($angka == 1000000) {
            $terbilang = "satu juta";
        } elseif ($angka > 1000000 && $angka < 2000000) {
            $terbilang = "satu juta " . terbilang($angka - 1000000);
        } elseif ($angka >= 200) {
            if ($angka % 1000000 == 0) {
                $terbilang = terbilang(intval($angka / 1000000)) . ' juta';
            } else {
                $terbilang = terbilang(intval($angka / 1000000)) . ' juta ' . terbilang($angka - intval($angka / 1000000) * 1000000);
            }
        }

        return $terbilang;
    }

    public function miliaran($angka) {
        if ($angka == 1000000000) {
            $terbilang = "satu miliar";
        } elseif ($angka > 1000000000 && $angka < 2000000000) {
            $terbilang = "satu miliar " . terbilang($angka - 1000000000);
        } elseif ($angka >= 200) {
            if ($angka % 1000000000 == 0) {
                $terbilang = terbilang(intval($angka / 1000000000)) . ' miliar';
            } else {
                $terbilang = terbilang(intval($angka / 1000000000)) . ' miliar ' . terbilang($angka - intval($angka / 1000000000) * 1000000000);
            }
        }

        return $terbilang;
    }
}
