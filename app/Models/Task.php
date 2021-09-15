<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected  $table="tasks";
    
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
    public function comments(){
        
        return $this->hasMany(Comment::class);
      }

}
