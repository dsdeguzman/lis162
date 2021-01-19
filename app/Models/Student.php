<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lrn',
        'student_full_name',
        'studentSex',
        'guardian_id',
        'section_id',
        'adviser_id',
        'level_id'
    ];

    /**
     * Get the guardian for each student.
     */
    public function guardian()
    {
      return $this->belongsTo('App\Models\Guardian');
    }

    /**
     * Get the section of each student.
     */
    public function section()
    {
      return $this->belongsTo('App\Models\Section');
    }

    /**
     * Get the adviser of each student.
     */
    public function adviser()
    {
      return $this->belongsTo('App\Models\Adviser');
    }

    /**
     * Get the grade level of each student.
     */
    public function level()
    {
      return $this->belongsTo('App\Models\Level');
    }

}
