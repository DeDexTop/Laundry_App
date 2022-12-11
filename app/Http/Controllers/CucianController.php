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
}
