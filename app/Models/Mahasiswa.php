<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'mahasiswas';

    public function prodis(){
        return $this -> belongsTo('App\Models\ProgramStudi');
    }
}
