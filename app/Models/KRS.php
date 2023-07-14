<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KRS extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'krses';
    public function dosens(){
        return $this -> BelongsTo('App\Models\Dosen');
    }
    public function mahasiswas(){
        return $this -> BelongsTo('App\Models\Mahasiswa');
    }
    public function mata_kulias(){
        return $this -> BelongsTo('App\Models\MataKuliah');
    }
}
