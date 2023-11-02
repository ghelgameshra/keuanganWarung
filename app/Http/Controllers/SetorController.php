<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\JenisSetor;
use App\Models\Setor;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class SetorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if( auth()->user()->level > 1 ){
            abort(403);
        }

        return view('admin.setor.setor', [
            'setor' => Setor::orderBy('docno', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if( auth()->user()->level > 1 ){
            abort(403);
        }
        return view('admin.setor.setoranBaru', [
            'jenis_setor' => JenisSetor::orderBy('jenis_setor', 'desc')->get(),
            'cabang' => Cabang::orderBy('nama_cabang', 'desc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if( auth()->user()->level > 1 ){
            redirect('/');
        }

        $messages = [
            'keterangan.max' => 'Teks terlalu panjang',
            'bukti_setor.image' => 'Bukti setor harus gambar!',
            'bukti_setor.max' => 'Ukuran file terlalu besar',
            'bukti_setor.required' => 'Bukti setor wajib diupload!',
        ];

        $rules = [
            'nominal_setor' => 'required|integer',
            'keterangan' => 'String|max:500|nullable',
            'jenis_setor' => 'required|integer',
            'id_cabang' => 'required|integer',
            'bukti_setor' => 'required|image|file|max:2048'
        ];

        // validasi input user dan kembalikan pesan
        $validatedData = $request->validate($rules, $messages);


        $validatedData['id_karyawan'] = auth()->user()->karyawan_id;

        // membuat docno baru
        $docno = Setor::orderBy('docno', 'desc')->first();
        $docno = $docno->docno;
        $validatedData['docno'] = $docno + 1;

        // membuat nomor invoice
        $cabang = Cabang::where('id', $validatedData['id_cabang'])->get('kode_cabang');
        $cabang = $cabang[0]->kode_cabang;
        $validatedData['invno'] = "STR" . $cabang . now()->format('Ymd') . str_pad($validatedData['docno'], 5, '0', STR_PAD_LEFT);

        // upload gambar
        if( $request->file('bukti_setor') ){
            $validatedData['bukti_setor'] = $request->file('bukti_setor')->store('images/bukti-setor');
        }

        Setor::create($validatedData);
        return redirect('/dashboard/setor')->with('success', 'Setor berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setor $setor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setor $setor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setor $setor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setor $setor)
    {
        //
    }
}
