<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use GuzzleHttp\Client;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.home')->with([
            'produks' => produk::all()->where('status', '=', 'bisa dijual'),
        ]);
    }
    public function halaman()
    {
        return view('content.home')->with([
            'produks' => produk::all()->where('status', '=', 'bisa dijual'),
        ]);
    }

    public function AmbilJson()
    {
        $string1 = "bisacoding-19-06-23";
        $hash = md5($string1);
        $client = new Client();
        $url = 'https://recruitment.fastprint.co.id/tes/api_tes_programmer';
        $response = $client->request('POST', $url, [
            'form_params' => [
                'username' => 'tesprogrammer190623C13',
                'password' => $hash,
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return $data;
    }

    public function ImportJson()
    {
        $json_data = file_get_contents('assets\ambil-data.json');
        $dataArray = json_decode($json_data, true);
        $tampung = $dataArray['data'];
        foreach ($tampung as $data) {
            $produk = new produk();
            $produk->id_produk = $data['id_produk'];
            $produk->nama_produk = $data['nama_produk'];
            $produk->harga = $data['harga'];
            $produk->kategori = $data['kategori'];
            $produk->status = $data['status'];
            $produk->save();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprodukRequest $request)
    {
        $produk = new produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->status = $request->status;
        $produk->save();
        return redirect('/')->with('msg','menambahkan produk baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        return view('content.edit')->with([
            'id_produk' => $produk->id_produk,
            'nama_produk' => $produk->nama_produk,
            'harga' => $produk->harga,
            'kategori' => $produk->kategori,
            'status' => $produk->status,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodukRequest $request, produk $produk)
    {
        $data = $produk->find($request->id_produk);
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->kategori = $request->kategori;
        $data->status = $request->status;
        $data->save();
        return redirect('/')->with('msg','merubah data produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $data = $produk->find($produk->id_produk);
        // dd($data);
        $data->delete();
        return redirect('/')->with('msg','Data berhasil dihapus');
    }
}
