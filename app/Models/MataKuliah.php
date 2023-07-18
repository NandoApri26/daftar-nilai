<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    public $guarded = ['id'];
    protected $table = 'mata_kulias';
    public function prodi(){
        return $this -> belongsTo('App\Models\ProgramStudi');
    }
}
