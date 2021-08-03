<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'fileable_type',
        'fileable_id',
        'name',
        'size',
        'width',
        'height',
        'mime',
        'disk',
        'is_main',
    ];

    protected $appends = [
        'link',
    ];

    public function getLinkAttribute()
    {
        return Storage::url($this->disk . '/' . $this->name);
    }

    public function getPathAttribute()
    {
        return sprintf('%s/%s', $this->disk, $this->name);
    }
}
