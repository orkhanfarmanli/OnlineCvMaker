<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsModel extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'skill_id';
    protected $fillable =  ['skill_id', 'skill_name', 'skill_level', 'cv_id'];
}
