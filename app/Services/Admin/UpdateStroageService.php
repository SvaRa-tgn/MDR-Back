<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Storage;

class UpdateStroageService
{
    public static function deleteImage($path): void
    {
        Storage::delete($path);
    }

    public static function updateImage(string $storage, $image): array
    {
        $path = Storage::putFile($storage, $image);
        $url = Storage::url($path);

        return ['path' => $path, 'url' => $url];
    }

    public static function excelupload($request)
    {
        return Storage::putFile('public/excel', $request->excel);
    }

    public static function destroyExcel($path)
    {
        Storage::delete($path);
    }

}
