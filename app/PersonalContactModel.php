<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalContactModel extends Model
{
    protected $table = 'personal_contact';
    protected $primaryKey = 'personal_contact_id';
    protected $fillable =  ['personal_contact_number', 'personal_contact_adress', 'personal_contact_email', 'personal_contact_social', 'personal_contact_web', 'cv_id'];
}
