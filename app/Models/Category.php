<?php

namespace App\Models;

use App\Models\Post;
use App\QueryParams\Category\Relations as RelationsQueryParam;
use App\QueryParams\Category\SelectSpecificColumns as SelectSpecificColumnsQueryParam;
use App\Traits\HasQueryParams;
use App\Traits\HasTranslation;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory, HasUuid, HasTranslation, HasQueryParams;

    protected $fillable = [
        'name',
        'slug',
        'description',
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
        return $this->hasMany(Post::class);
    }
}
