<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request) {
        $request->validate([
            'nik'=> 'required|integer',
            'nama'=> 'required|string',
        ]);
    
        if (Auth::attempt(['nik' => $request->nik, 'password'=> $request->nama])) {
            $request->session()->regenerate();
    
            return redirect()->intended('dashboard');
    }

    return back()->with('loginError', 'NIK atau Nama yang anda gunakan tidak terdaftar');
    }
}