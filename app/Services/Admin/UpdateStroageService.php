<?php

namespace App\Services\Admin;

use App\Http\Requests\AdminPage\Excel\ExcelRequest;
use Illuminate\Support\Facades\Storage;

class UpdateStroageService
{
    const STORAGE = '';

    public static function deleteImage(string $path): void
    {
        Storage::delete($path);
    }

    public static function updateImage(string $storage, string $image): array
    {
        $path = Storage::putFile($storage, $image);
        $url = Storage::url($path);

        return ['path' => $path, 'url' => $url];
    }

    public static function excelupload(ExcelRequest $request)
    {
        return Storage::putFile('public/excel', $request->excel);
    }

    public static function destroyExcel(string $path)
    {
        Storage::delete($path);
    }

}
