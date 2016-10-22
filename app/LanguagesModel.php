<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguagesModel extends Model
{
     protected $table = 'languages';
     protected $primaryKey = 'language_id';
     protected $fillable = ['language_id', 'language_name', 'language_level', 'cv_id'];
}
