<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\DetailLaundry;
use App\Http\Requests\StorelaundryRequest;
use App\Http\Requests\UpdatelaundryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kasir.index_cucian', [
            'title' => 'Kasir',
            'active' => 'pencuci',
            'laundries' => Laundry::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir.index_tambah', [
            'title' => 'Tambah Cucian Baru',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelaundryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pelanggan' => 'required',
            'no_telp' => 'required|max:14|min:11',
            'alamat' => 'required',
            'status_pembayaran' => 'required',
            'pilihan_pengantaran' => 'required',
        ]);

        if($request->pilihan_pengantaran == 'diantar')
        {
            $validateData['status_pengiriman'] = 'belum diantar';
        }
        else
        {
            $validateData['status_pengiriman'] = 'tidak diantar';
        }

        $validateData['pegawai_id'] = auth()->user()->id;
        $validateData['status_pencucian'] = 'belum dicuci';
        $validateData['kategori_id'] = $request->kategori_id;
        $validateData['berat'] = $request->berat;

        $Date = date('Y-m-d');
        $validateData['tgl_selesai'] = date('Y-m-d', strtotime($Date. ' + 3 days'));

        $laundry = Laundry::create($validateData);

        for ($i=0; $i < count($request->kategori_id); $i++) 
        { 
            $harga = Category::find($request->kategori_id[$i])->harga;
            $subtotal = $harga * $request->berat[$i];
            
            DetailLaundry::create([
                'laundry_id' => $laundry->id,
                'kategori_id' => $request->kategori_id[$i],
                'berat' => $request->berat[$i],
                'subtotal' => $subtotal
            ]);  
        }
        $total = DetailLaundry::where('laundry_id',$laundry->id)->get()->sum('subtotal');
    
        Laundry::where('id', $laundry->id)
               ->update(['total' => $total]);

        return redirect('/kasir/laundry')->with('success', 'Data Laundry Telah di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function show(Laundry $laundry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function edit(Laundry $laundry)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelaundryRequest  $request
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelaundryRequest $request, Laundry $laundry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laundry $laundry)
    {
        //
    }
}
