<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
    public function FunctionName(){
        return $this->belongsTo(Sekolah::class);
    }

    public function siswa(){
        return $this->belongsToMany(Siswa::class)->withTimeStamps();
    }

}
