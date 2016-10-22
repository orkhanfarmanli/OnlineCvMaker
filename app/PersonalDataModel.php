<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDataModel extends Model
{
     protected $table = 'personal_data';
     protected $primaryKey = 'personal_data_id';
     protected $fillable = ['personal_data_fname', 'personal_data_bdate', 'personal_data_info', 'personal_data_profession', 'cv_id'];
}
