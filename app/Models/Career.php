<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Career extends Model
{
    use HasFactory;

    protected $table = 'careers';

    public function subjects()
    {
       return $this->belongsToMany(Subject::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    
}
