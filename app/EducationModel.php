<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
    protected $table = 'educations';
    protected $primaryKey = 'education_id';
    protected $fillable =  ['education_id', 'education_date', 'education_name', 'education_degree', 'education_info', 'cv_id'];
}
