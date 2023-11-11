<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use File;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::get();
        return view('admin.mahasiswa.index', compact('data'));
    }
    public function create()
    {
        return view('admin.mahasiswa.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->foto) {
            $file_name = $request->foto->getClientOriginalName();
            $input['foto'] = $file_name;

            $request->file('foto')->move('storage/foto', $file_name);
        }

        Mahasiswa::create($input);
        return redirect()->route('admin.mahasiswa.index');
    }
    public function edit($id)
    {
        $data = Mahasiswa::find($id);

        return view('admin.mahasiswa.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::find($id);

        $input = $request->all();

        if ($request->foto) {
            if ($data->foto) {
                File::delete(public_path('storage/foto/' . $data->foto));
            }
            $file_name = $request->foto->getClientOriginalName();
            $input['foto'] = $file_name;

            $request->file('foto')->move('storage/foto', $file_name);
        }

        $data->update($input);
        return redirect()->route('admin.mahasiswa.index');
    }
    public function destroy($id)
    {
        $data = Mahasiswa::find($id);
        if ($data->foto) {
            file::delete(public_path('storage/foto/' . $data->foto));
        }
        $data->delete();

        return redirect()->route('admin.mahasiswa.index');
    }
    public function print()
    {
        $data = Mahasiswa::get();

        return view('admin.mahasiswa.cetak', compact('data'));
    }
    public function search(Request $request)
    {
        if (isset($request->keyword)) {
            $request->flash();

            $data = Mahasiswa::where('nama_mahasiswa', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('jurusan', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('npm', 'LIKE', '%' . $request->keyword . '%')->get();
        } else {
            return redirect()->route('admin.mahasiswa.index');
        }
        return view('admin.mahasiswa.index', compact('data'));
    }
}
