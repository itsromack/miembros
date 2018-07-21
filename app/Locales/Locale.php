<?php

namespace App\Locales;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    protected $fillable = [
        'name',
        'address',
        'contact_persons',
        'contact_numbers',
        'zone',
        'district',
        'division'
    ];
}