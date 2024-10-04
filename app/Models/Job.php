<?php

namespace App\Models;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function tag(string $name){
       $tag = Tag::firstOrCreate(["name" => $name]);

       $this->tags()->attach($tag);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    function employer(){
       return $this->belongsTo(Employer::class);
    }
    
}
