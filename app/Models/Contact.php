<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['from_id','to_id','subject','message'];
    
    public function user(){
        return $this->belongdTo(User::class);
    }
}

