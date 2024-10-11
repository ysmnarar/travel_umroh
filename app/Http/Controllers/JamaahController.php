<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jamaah;
use App\Models\Kamar;
use App\Models\Paket;

class JamaahController extends Controller
{
    public function index()
    {
        $jamaah = Jamaah::all();
        return view('admin.jamaah.index', compact('jamaah'));
    }

    public function create()
    {
        $paket = Paket::all();
        $kamar = Kamar::all();
        return view('admin.jamaah.create', compact('paket', 'kamar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string',
            'nik' => 'required|numeric',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'provinsi' => 'required|string',
            'kab_kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_paspor' => 'nullable|string',
            'masa_berlaku_paspor' => 'nullable|date',
            'lampiran_ktp' => 'nullable|file',
            'lampiran_kk' => 'nullable|file',
            'lampiran_foto_diri' => 'nullable|file',
            'lampiran_paspor' => 'nullable|file',
            'no_visa' => 'nullable|string',
            'berlaku_sampai' => 'nullable|date',
            'paket_id' => 'required|exists:paket,id',
            'kamar_id' => 'required|exists:kamar,id',
        ]);

        // Menyimpan file jika ada
        if ($request->hasFile('lampiran_ktp')) {
            $validated['lampiran_ktp'] = $request->file('lampiran_ktp')->store('lampiran_ktp');
        }
        if ($request->hasFile('lampiran_kk')) {
            $validated['lampiran_kk'] = $request->file('lampiran_kk')->store('lampiran_kk');
        }
        if ($request->hasFile('lampiran_foto_diri')) {
            $validated['lampiran_foto_diri'] = $request->file('lampiran_foto_diri')->store('lampiran_foto_diri');
        }
        if ($request->hasFile('lampiran_paspor')) {
            $validated['lampiran_paspor'] = $request->file('lampiran_paspor')->store('lampiran_paspor');
        }

        Jamaah::create($validated);

        return redirect()->back()->with('success', 'Data Jamaah berhasil ditambahkan');
    }

    public function show($id)
    {
        // Menampilkan detail data jamaah
        $jamaah = Jamaah::findOrFail($id);
        $kamar = Kamar::findOrFail($id);
        $paket = Paket::findOrFail($id);
        return view('admin.jamaah.show', compact('jamaah', 'kamar', 'paket'));
    }

    public function edit($id)
    {
        // Menampilkan form edit data jamaah
        $jamaah = Jamaah::findOrFail($id);
        $paket = Paket::all();
        $kamar = Kamar::all();
        return view('admin.jamaah.edit', compact('jamaah', 'paket', 'kamar'));
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data jamaah
        $request->validate([
            'nama_lengkap' => 'required|string',
            'nik' => 'required|numeric',
            // tambahkan validasi lainnya
        ]);

        $jamaah = Jamaah::findOrFail($id);
        $jamaah->update($request->all());

        return redirect()->route('admin.jamaah.index')->with('success', 'Data Jamaah berhasil diupdate!');
    }

    public function destroy($id)
    {
        // Hapus data jamaah
        $jamaah = Jamaah::findOrFail($id);
        $jamaah->delete();

        return redirect()->route('admin.jamaah.index')->with('success', 'Data Jamaah berhasil dihapus!');
    }
}
