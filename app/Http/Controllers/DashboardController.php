<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private function getTotal()
    {
        $total = Laundry::select([
                Laundry::raw('sum(total) as total'),
                Laundry::raw('MONTH(tgl_masuk) as month')
            ])
            ->groupBy('month')
            ->get();

        return $total;
    }

    public function index()
    {
        
        $data = Laundry::select([
            Laundry::raw('sum(total) as total')
        ])->get()->groupBy(function ($data){
            return Carbon::parse($data->created_at)->format('M');
        });

        $total = Laundry::select([
            Laundry::raw('DATE(tgl_masuk) as month'),
            Laundry::raw('sum(total) as total'),
        ])
        ->groupBy('month')
        ->get();


        // dd($data, $total);

        $months = array();
        $totals = [];

        foreach ($total as $month) {
            
            $format = Carbon::parse($month->month)->format('M');
            // $months[] += $month->month;
            array_push($months, $format);
            $totals[] += $month->total;
        }

        // dd($months, $total);

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'Dashboard',
            'total' => Laundry::where('status_pembayaran', 'lunas')->get()->sum('total'),
            'harian' => Laundry::whereDate('tgl_masuk', Carbon::today())->where('status_pembayaran', 'lunas')->get()->sum('total'),
            'pending' => Laundry::where('status_pencucian', 'belum dicuci')->count(),
            'tugas' => Laundry::all()->count(),
            'totals' => $totals,
            'months' => $months,
            'cucian' => Laundry::whereDate('tgl_masuk', Carbon::today())->where('status_pencucian', 'selesai')->count(),
            'pengiriman' => Laundry::whereDate('tgl_masuk', Carbon::today())->where('status_pengiriman', 'selesai di kirim')->count(),
            'menunggu' => Laundry::where('status_pencucian', '!=', 'selesai')->count(),
            'diambil' => Laundry::where('pilihan_pengantaran', 'ambil ditempat')->count()
        ]);

        
    }

    public function status()
    {
        return view('dashboard.status', [
            'title' => 'Status',
            'active' => 'Status',
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
