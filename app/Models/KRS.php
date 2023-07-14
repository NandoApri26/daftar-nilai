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
        return $this -> belongsTo('App\Models\Dosen');
    }
    public function mahasiswas(){
        return $this -> belongsTo('App\Models\Mahasiswa');
    }
    public function mata_kulias(){
        return $this -> belongsTo('App\Models\MataKuliah');
    }
    public function semesters(){
        return $this -> belongsTo('App\Models\Semester');
    }
}
