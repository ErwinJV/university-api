<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

   public function notes()
   {
      return $this->hasMany(Note::class);
   }

   public function careers()
   {
      return $this->belongsToMany(Career::class);
   }

   public function teachers()
   {
      return $this->belongsToMany(Teacher::class);
   }
}
