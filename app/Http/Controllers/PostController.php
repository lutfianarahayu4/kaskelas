<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $siswas = Siswa::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('siswas'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * 
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'     => 'required',
        ]);
        Siswa::create([
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,
        ]);

        //redirect to index
        return redirect()->route('siswas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Siswa $siswa)
    {
        return view('posts.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'   => 'required',
        ]);
        $siswa->update([
            'nama'     => $request->nama,
            'kelas'   => $request->kelas
        ]);
        return redirect()->route('siswas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $guru
     * @return void
     */
    
    
    /**
     * destroy
     *
     * @param  mixed $guru
     * @return void
     */
    public function destroy(Siswa $siswa)
    {
        //delete post
        $siswa->delete();

        //redirect to index
        return redirect()->route('siswas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}