<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'npm',
        'kelas_id',
        'foto',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id'); // Ensure 'fakultas_id' is the foreign key in 'users' table
    }
    
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function getUser($id = null)
{
    if ($id != null) {
        return $this->with('kelas')->find($id); // Eager loading untuk user berdasarkan ID
    } else {
        return $this->with('kelas')->get(); // Eager loading untuk semua user
    }
}



    
}