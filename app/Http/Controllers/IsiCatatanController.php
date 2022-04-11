<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class IsiCatatanController extends Controller
{
    //
    public function index()
    {
        $catatans = Catatan::all();
        return view('isicatatan', compact('catatans'));
    }  

    public function store(Request $request)
    {
        //
        $request->validate([
            'tanggal'=>'required',
            'jam'=> 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
        ]);
 
        $catatan = new Catatan([
            'tanggal' => $request->get('tanggal'),
            'jam'=> $request->get('jam'),
            'lokasi'=> $request->get('lokasi'),
            'suhu'=> $request->get('suhu'),
        ]);
 
        $catatan->save();
        return redirect('isicatatan')->with('success', 'Student has been added');
    }
}
