<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'dosens';
    public function prodi(){
        return $this -> belongsTo('App\Models\ProgramStudi');
    }
}
