<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nip extends Model
{
    use HasFactory;
    protected $table = 'nip';
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
