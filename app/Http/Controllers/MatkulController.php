<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MatkulController extends Controller
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'http://localhost:8080';
    }

    public function index()
    {
        try {
            $response = Http::get("{$this->baseUrl}/matkul");
            $data = $response->json();

            return view('admin.matkul.index', ['matkul' => $data]);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to fetch data: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul' => 'required|string',
            'nama_matkul' => 'required|string',
            'sks' => 'required|string',
            'semester' => 'required|string'
        ]);

        try {
            Http::asForm()->post("{$this->baseUrl}/matkul", $request->only([
                'kode_matkul', 'nama_matkul', 'sks', 'semester'
            ]));

            return redirect()->route('matkul.index')->with('success', 'Matkul berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to add data: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($kode_matkul)
    {
        try {
            $response = Http::get("{$this->baseUrl}/matkul/{$kode_matkul}");
            $data = $response->json();
            $data = $data[0]; // Jika respons berupa array tunggal

            return view('admin.matkul.edit', ['matkul' => $data]);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to fetch data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $kode_matkul)
    {
        $request->validate([
            'kode_matkul' => 'required|string',
            'nama_matkul' => 'required|string',
            'sks' => 'required|string',
            'semester' => 'required|string'
        ]);

        try {
            Http::asForm()->put("{$this->baseUrl}/matkul/{$kode_matkul}", $request->only([
                'kode_matkul', 'nama_matkul', 'sks', 'semester'
            ]));

            return redirect()->route('matkul.index')->with('success', 'Matkul berhasil diperbarui');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update data: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($kode_matkul)
    {
        try {
            Http::delete("{$this->baseUrl}/matkul/{$kode_matkul}");

            return redirect()->route('matkul.index')->with('success', 'Matkul berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete data: ' . $e->getMessage());
        }
    }
}
