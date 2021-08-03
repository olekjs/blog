<?php

namespace App\Models;

use App\Models\Post;
use App\QueryParams\Tag\Relations as RelationsQueryParam;
use App\QueryParams\Tag\SelectSpecificColumns as SelectSpecificColumnsQueryParam;
use App\Traits\HasQueryParams;
use App\Traits\HasTranslation;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory, HasUuid, HasQueryParams, HasTranslation;

    protected $fillable = [
        'name',
        'slug',
    ];

    public static function queryParams()
    {
        return [
            RelationsQueryParam::class,
            SelectSpecificColumnsQueryParam::class,
        ];
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
