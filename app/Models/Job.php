<?php

namespace App\Models;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    function employer(){
       return $this->belongsTo(Employer::class);
    }
    
}
