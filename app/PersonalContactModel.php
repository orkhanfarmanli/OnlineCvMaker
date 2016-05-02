<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalContactModel extends Model
{
    protected $table = 'personal_contact';
    protected $primaryKey = 'personal_contact_id';
    protected $fillable =  ['personal_contact_id', 'personal_contact_name', 'personal_contact_data', 'cv_id'];
}
