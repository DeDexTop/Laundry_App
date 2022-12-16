<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CucianController extends Controller
{
     public function index()
    {
        $laundry = Laundry::latest();

        if(request('search')) 
        {
            $laundry->where('pelanggan', 'like', '%' . request('search') . '%');
        }

        return view('status-cucian', [
            'title' => 'Status Cucian Anda',
            'laundries' => $laundry->get()
        ]);
    }

    public function edit(Laundry $laundry)
    {
        return view('pencuci.index', [
            'title' => 'Pencuci',
            'laundries' => $laundry->where('status_pencucian', 'belum dicuci')
                                   ->orWhere('status_pencucian', 'sedang di proses')
                                   ->orWhere('status_pencucian', 'sedang di cuci')
                                   ->get()
        ]);
    }

    public function update(Request $request, Laundry $laundry)
    {
        if($request->cuci == 'cuci')
        {
            Laundry::where('id', $laundry->id)
                  ->update(['status_pencucian' => 'sedang di proses']);
            
            return redirect('/pencuci')->with('success', 'Data Laundry Telah Terubah');
        }
        else if($request->sedang)
        {
            Laundry::where('id', $laundry->id)
                  ->update(['status_pencucian' => 'sedang di cuci']);
            
            return redirect('/pencuci')->with('success', 'Data Laundry Telah Terubah');
        }
        else if($request->selesai)
        {
            Laundry::where('id', $laundry->id)
                  ->update(['status_pencucian' => 'selesai']);
            
            return redirect('/pencuci')->with('success', 'Data Laundry Telah Terubah');
        }

        else if($request->antar == 'antar')
        {
            Laundry::where('id', $laundry->id)
                  ->update(['status_pengiriman' => 'sedang di kirim']);
            
            return redirect('/kurir')->with('success', 'Data Laundry Telah Terubah');
        }

        else if($request->kirim == 'kirim')
        {
            Laundry::where('id', $laundry->id)
                  ->update(['status_pengiriman' => 'selesai di kirim']);
            
            return redirect('/kurir')->with('success', 'Data Laundry Telah Terubah');
        }
    }
}

