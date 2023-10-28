<?php

namespace App\Http\Controllers;

use App\Models\Checker;
use App\Models\Karyawan;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(getUserRole() == 1){
            return view('admin.laporan.laporan', [
                'laporan' => Laporan::orderBy('docno', 'desc')->get(),
            ]);
        } else {
            return view('dashboard.laporan.laporan', [
                'laporan' => Laporan::where('id_karyawan', auth()->user()->karyawan_id)->orderBy('docno', 'desc')->get()
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $id_laporan_temp = now()->format('ymd') . $user->Karyawan->kode_toko . $user->Karyawan->shift;

        if( $id_laporan_temp === Controller::getDataId() ){
            return view('dashboard.laporan.sudah_input');
        }

        return view('dashboard.laporan.laporan_input', [
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // get data laporan terakhir
        $data = Controller::getDataId();

        $rules = [
            'kode_toko' => 'required|String|max:6',
            'shift' => 'required|Integer|max:3',
            'tabungan' => 'required|Integer|min:0',
            'input_aktual_kas' => 'required|Integer',
            'catatan' => 'String|nullable'
        ];

        // validasi input
        $validatedData = $request->validate($rules);

        // buat docno baru
        $validatedData['docno'] = $data->docno + 1;

        // create id_laporan
        $validatedData['id_laporan'] = now()->format('ymd');
        $validatedData['id_laporan'] .= auth()->user()->Karyawan->kode_toko;
        $validatedData['id_laporan'] .= auth()->user()->Karyawan->shift;
        $validatedData['id_laporan'] .= strval( str_pad($validatedData['docno'], 5, '0', STR_PAD_LEFT) );

        // id_karyawan
        $validatedData['id_karyawan'] = auth()->user()->Karyawan->id;

        // hitung aktual kas
        $validatedData['aktual_kas'] = $validatedData['input_aktual_kas'] - $validatedData['tabungan'];


        try {
            Laporan::create($validatedData);
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect('/dashboard/laporan/'. $validatedData['id_laporan'] )->with('success', 'Input Aktual Kas Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        // dd($laporan->Checker);
        if( getUserRole() == 1 ){
            return view('admin.laporan.laporanDetail', [
                'laporan' => $laporan
            ]);
        } else {
            return view('dashboard.laporan.laporan_detail', [
                'laporan' => $laporan
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        if(getUserRole() > 1){
            abort(403);
        }
        return view('admin.laporan.laporanEdit', [
            'laporan' => $laporan,
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        // dd($laporan, $request);
        $rules = [
            'approved' => 'required|max:2',
            'alasan' => 'string|nullable',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['id'] = $laporan->id;
        $validatedData['id_laporan'] = $laporan->id_laporan;
        $validatedData['docno'] = $laporan->docno;
        $validatedData['id_karyawan'] = $laporan->id_karyawan;
        $validatedData['kode_toko'] = $laporan->kode_toko;
        $validatedData['shift'] = $laporan->shift;
        $validatedData['input_aktual_kas'] = $laporan->input_aktual_kas;
        $validatedData['tabungan'] = $laporan->tabungan;
        $validatedData['aktual_kas'] = $laporan->aktual_kas;
        $validatedData['checker_id'] = auth()->user()->Karyawan->id;

        // dd($validatedData);
        Laporan::where('id', $laporan->id)->update($validatedData);
        return redirect('/dashboard/laporan/'. $validatedData['id_laporan'] )->with('success', 'Data Laporan Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
