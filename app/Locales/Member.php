<?php

namespace App\Locales;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'church_id',
        'locale_church_id',
        'baptised_at',
        'nick_name',
        'first_name',
        'middle_name',
        'last_name',
        'primary_address',
        'secondary_address',
        'provincial_address',
        'contact_numbers',
        'civil_status',
        'spouse_name',
        'education',
        'work_background',
        'skills',
        'ministries',
        'relatives_in_church',
        'blood_type',
        'former_religion',
        'character_references',
        'philhealth_number',
        'sss_number',
        'is_active_voter',
        'precint_number',
        'history',
        'progress_history',
        'medical_history',
        'picture',
        'born_at',
        'active_status_level'
    ];
}