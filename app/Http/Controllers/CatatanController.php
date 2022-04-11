<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatatanController extends Controller
{
    //
    public function index()
    {
        $data['catatan'] = Catatan::all();
        return view('catatan', $data);
    }
    public function show(Request $request)
    {
        $tanggalurut = $request->input('tanggalurut');
        $query = DB::table('catatans')->select()
        ->where('tanggal', '<=', $tanggalurut)
        ->get();

        $role = DB::table('users')
        ->select('users.nik',)
    }
}
