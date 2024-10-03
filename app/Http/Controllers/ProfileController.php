<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => 'Ananda Karunia Putri',
            'kelas' => 'A',
            'npm' => '2217051152',
            'deskripsi' => "Halo, namaku Ananda Karunia Putri, NPM 2217051152 dari kelas A. Aku sekarang udah semester 5 di Jurusan Ilmu Komputer. Aku punya kucing namanya Macici. 
            Kemarin aku beli semacam alpukat gitu tapi belum ada namanya. Nah, kemaren dia diajak Gus ke Jatimulyo, terus sekarang dibawa sama Nj ke kosannya.
            Sekarang dia gaada di sini, dia lagi bobo sama Nj di kosan Nj. Parah banget dia itu emang. Kangen Popo:( ((Popo itu nama palsu, nama aslinya belum ada, belum ada badaknya)).",
        ];
        return view('profile', $data);
    }
}