<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create($nama = "", $kelas = "", $npm = "")
{ 
    $data = [
        'nama' => 'Ananda Karunia Putri', 
        'kelas' => 'A', 
        'npm' => '2217051152' 
    ];
    
        return view('create_user'); 
}
    public function store(Request $request){
       
            $data = [ 
                'nama' => $request->input('nama'), 
                'npm' => $request->input('npm'), 
                'kelas' => $request->input('kelas'), 
                ];
                return view ('profile', $data);
        
     

    }

}