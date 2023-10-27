<?php

namespace App\Http\Controllers;

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
                'laporan' => Laporan::orderBy('id_laporan', 'desc')->get()
            ]);
        } else {
            return view('dashboard.laporan.laporan', [
                'laporan' => Laporan::where('nik', auth()->user()->nik)->orderBy('id_laporan', 'desc')->get()
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_laporan_temp = now()->format('ymd') . userActive()[0]->kode_toko. userActive()[0]->shift;

        if( $id_laporan_temp === Controller::getDataId() ){
            return view('dashboard.laporan.sudah_input');
        }


        return view('dashboard.laporan.laporan_input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // get data laporan terakhir
        $data = Controller::getDataId();

        $rules = [
            'id_laporan' => 'required|String',
            'kode_toko' => 'required|String|max:6',
            'shift' => 'required|Integer|max:3',
            'tabungan' => 'required|Integer|min:0',
            'input_aktual_kas' => 'required|Integer',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['nik'] = userActive()[0]->nik;
        $validatedData['docno'] = $data->docno + 1;


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
            'laporan' => $laporan
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
        $validatedData['nik'] = $laporan->nik;
        $validatedData['kode_toko'] = $laporan->kode_toko;
        $validatedData['shift'] = $laporan->shift;
        $validatedData['input_aktual_kas'] = $laporan->input_aktual_kas;
        $validatedData['tabungan'] = $laporan->tabungan;
        $validatedData['aktual_kas'] = $laporan->aktual_kas;
        $validatedData['checker'] = auth()->user()->nik;

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
