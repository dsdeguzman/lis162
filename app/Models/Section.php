<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_name',
        'level_id',
        'adviser_id'
    ];

    /**
     * Get the adviser facilitating over a section.
     */
    public function adviser()
    {
        return $this->belongsTo('App\Models\Adviser');
    }

    /**
     * Get the grade level of a section.
     */
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    /**
     * Get the students of each section.
     */
    public function students()
    {
      return $this->hasMany('App\Models\Student');
    }
}
