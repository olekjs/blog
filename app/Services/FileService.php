<?php

namespace App\Services;

use App\Contracts\Repositories\FileRepositoryInterface;
use App\Contracts\Services\FileServiceInterface;
use App\Models\File;
use Illuminate\Contracts\Filesystem\Factory as StorageInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FileService implements FileServiceInterface
{
    private $fileRepository;

    private $storageRepository;

    public function __construct(
        FileRepositoryInterface $fileRepository,
        StorageInterface $storageRepository
    ) {
        $this->fileRepository    = $fileRepository;
        $this->storageRepository = $storageRepository;
    }

    public function attachToModelFromBase64(
        Model $model,
        string $relationName,
        string $base64File,
        bool $isMain = false,
        string $disk = null
    ) {
        $diskName = $disk ?? get_class($model);
        $fileName = Str::uuid();

        $fileModel = $model->{$relationName}()->create([
            'name'    => $fileName,
            'disk'    => $diskName,
            'is_main' => $isMain,
        ]);

        $this->storageRepository->put($fileModel->path, base64_decode($base64File));

        return $fileModel;
    }

    public function delete(File $file)
    {
        $deletedFile = $this->storageRepository->delete($file->path);

        $file->delete();

        return $deletedFile;
    }
}
