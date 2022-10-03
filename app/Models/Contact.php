<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public function sujets(){
        return $this->belongsTo(Sujets::class, 'sujet_id');
    }
}
