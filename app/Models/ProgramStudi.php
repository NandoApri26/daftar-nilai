<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'prodis';

    public function fakultas(){
        return $this -> belongsTo('App\Models\Fakultas');
    }
}
