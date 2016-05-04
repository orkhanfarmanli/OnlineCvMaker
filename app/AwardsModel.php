<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AwardsModel extends Model
{
   protected $table = 'awards';
    protected $primaryKey = 'award_id';
    protected $fillable =  ['award_id', 'award_text', 'cv_id'];
}
