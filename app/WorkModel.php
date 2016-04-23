<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkModel extends Model
{
    protected $table = 'works';
    protected $fillable =  ['work_date', 'work_company', 'work_profession', 'work_info', 'cv_id'];
}
