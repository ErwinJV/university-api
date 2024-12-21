<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}

