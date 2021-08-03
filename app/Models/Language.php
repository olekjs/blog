<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'name',
        'iso639_1_code',
        'iso639_2_code',
    ];
}
