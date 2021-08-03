<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'language_id',
        'translationable_type',
        'translationable_id',
        'content',
        'column_name',
    ];

    public function translationable()
    {
        return $this->morphTo();
    }
}
