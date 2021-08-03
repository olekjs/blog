<?php

namespace App\Models;

use App\Models\File;
use App\Traits\HasTranslation;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasUuid, HasTranslation;

    protected $fillable = [
        'name',
        'content',
        'slug',
        'link',
    ];

    protected $with = [
        'hero',
    ];

    public function hero()
    {
        return $this->morphOne(File::class, 'fileable')->where('is_main', true);
    }

    public function images()
    {
        return $this->morphMany(File::class, 'fileable')->where('is_main', false);
    }
}
