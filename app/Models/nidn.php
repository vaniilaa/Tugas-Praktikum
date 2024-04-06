<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nidn extends Model
{
    use HasFactory;
    protected $table = 'nidn';
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
