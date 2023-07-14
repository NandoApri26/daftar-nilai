<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'nilais';
    public function krses(){
        return $this -> belongsTo('App\Models\KRS');
    }
}
