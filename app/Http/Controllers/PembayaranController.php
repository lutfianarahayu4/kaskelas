<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $pembayarans = Pembayaran::latest()->paginate(5);

        //render view with posts
        return view('pembayarans.index', compact('pembayarans'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $pembayarans = Siswa::latest()->paginate(5);
        $siswa = siswa::all();
        return view('pembayarans.create', compact('pembayarans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'id_siswa'     => 'required',
            'tgl_bayar' => 'required|date',
            'jumblah_bayar' =>'required|numeric',
        ]);
        //check if a record exists,update it
        $existingRecord = Pembayaran::where('id_siswa', $request->id_siswa)->first();

        if($existingRecord) {
            //If the record exists, update it
            $existingRecord->update([
                'tgl_bayar' => $request->tgl_bayar,
                'jumlah_bayar' => $existingRecord->jumlah_bayar + $request->jumlah_bayar,
            ]);

            // Redirect to index with success message
            return redirect()->route('pembayaran.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
        $dataT = [
                    'id_siswa'      => $request->id_siswa,
                    'tgl_bayar'     => $request->tgl_bayar,
                    'jumblah_bayar'   => $request->jumblah_bayar,
        ];

        Pembayaran::create($dataT);
        //create post
        // Pembayaran::create([
        //     'id_siswa'      => $request->id_siswa,
        //     'tanggal_bayar' => $request->tanggal_bayar,
        //     'jumlah_bayar'   => $request->jumlah_bayar,
        // ]);

        //redirect to index
        return redirect()->route('pembayarans.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    try {
        Pembayaran::destroy($id);
        return redirect()->route('pembayarans.index')->with(['success' => 'Data Berhasil Di Hapus']);
    } catch (\Exception $e) {
        return redirect()->route('pembayarans.index')->with(['errors' => 'Error: ' . $e->getMessage()]);
    }
}

}
