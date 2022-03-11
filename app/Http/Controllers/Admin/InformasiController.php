<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::latest()->when(request()->search, function($informasi) {
            $informasi = $informasi->where('jenis_informasi', 'like', '%'. request()->search . '%');
        })->paginate(10);

        return view('admin.informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_informasi' => 'required',
            'isi' => 'required',
        ]);
        Informasi::create($request->all());

        return redirect()->route('informasi.index')
            ->withSuccess(__('Information created successfully.'));
    }

    public function show(Informasi $informasi)
    {
        return view('admin.informasi.show',compact('informasi'));
    }

    public function edit(Informasi $informasi)
    {
        return view('admin.informasi.edit',compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi){
        $request->validate([
            'jenis_informasi' => 'required',
            'isi' => 'required',
        ]);
        $informasi = Informasi::findOrFail($informasi->id);
        $informasi->update($request->all());
        return redirect()->route('informasi.index',compact('informasi'))
            ->withSuccess(__('Information updated successfully.'));
    }

    public function destroy(Informasi $informasi)
    {
        $informasi = Informasi::findOrFail($informasi->id);
        $informasi->delete();
        return redirect()->route('informasi.index',$informasi)->with('success','Information deleted successfully');
    }
}
