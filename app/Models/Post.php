<?php

namespace App\Models;

use App\Models\Category;
use App\Models\File;
use App\Models\Tag;
use App\Models\User;
use App\QueryFilters\Post\Query as QueryFilter;
use App\QueryParams\Post\Relations as RelationsQueryParam;
use App\QueryParams\Post\SelectSpecificColumns as SelectSpecificColumnsQueryParam;
use App\Traits\Filterable;
use App\Traits\HasQueryParams;
use App\Traits\HasTranslation;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUuid, HasQueryParams, Filterable, HasTranslation;

    protected $fillable = [
        'author_id',
        'category_id',
        'title',
        'content',
        'slug',
    ];

    public static function queryParams()
    {
        return [
            RelationsQueryParam::class,
            SelectSpecificColumnsQueryParam::class,
        ];
    }

    public static function queryFilters()
    {
        return [
            QueryFilter::class,
        ];
    }

    public function hero()
    {
        return $this->morphOne(File::class, 'fileable')->where('is_main', true);
    }

    public function images()
    {
        return $this->morphMany(File::class, 'fileable')->where('is_main', false);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
