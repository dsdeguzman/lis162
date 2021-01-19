<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $table = "guardians";

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guardian_full_name',
        'guardianSex',
        'guardianMobileNumber1',
        'guardianMobileNumber2',
        'guardianMobileNumber3',
        'guardianTelNumber',
        'guardianEmail',
        'guardianAddress',
        'guardianRelType'
    ];

    /**
     * Get the students under each guardian.
     */
    public function students()
    {
      return $this->hasMany('App\Models\Student');
    }
}
