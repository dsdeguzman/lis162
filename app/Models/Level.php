<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade_level'
    ];

    /**
     * Get the sections under a grade level.
     */
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    /**
     * Get the students under a grade level.
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

}
