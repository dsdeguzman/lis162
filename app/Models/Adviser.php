<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adviser_full_name'
    ];

    /**
     * Get the section under an adviser.
     */
    public function section()
    {
        return $this->hasOne('App\Models\Section');
    }

    /**
     * Get the students under an adviser.
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}
