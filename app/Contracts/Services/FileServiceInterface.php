<?php

namespace App\Contracts\Services;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;

interface FileServiceInterface
{
    public function delete(File $file);

    public function attachToModelFromBase64(
        Model $model,
        string $relationName,
        string $base64File,
        bool $isMain = false,
        string $disk = null
    );
}
