<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Product\CreateModulCompilationRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOcreateModulCompilation extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $collection;
    public string $full_name;
    public string $slug_full_name;
    public string $small_name;
    public string $slug_small_name;
    public string $article;
    public array $imageArr;
    public string $korpus;
    public string $fasad;
    public string $color_korpus_id;
    public string $color_fasad_id;
    public string $status;
    public array $modul_items;


    public static function fromCreateModulCompilationRequest(CreateModulCompilationRequest $request): self
    {
        $data = $request->validated();
        $lover = Str::lower($data['full_name']);
        $full_name = Str::title($lover);
        $lover = Str::lower($data['small_name']);
        $small_name = Str::title($lover);
        $slug_full_name = Transliterate::slugify($data['full_name']);
        $slug_small_name = Transliterate::slugify($data['small_name']);

        if(empty($data['image'])){
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        if(empty($data['image1'])){
            $image1 = 'null';
        } else {
            $image1 = $data['image1'];
        }

        if(empty($data['image2'])){
            $image2 = 'null';
        } else {
            $image2 = $data['image2'];
        }

        if(empty($data['image3'])){
            $image3 = 'null';
        } else {
            $image3 = $data['image3'];
        }

        $imageArr = [
            'image_top' => $data['image_top'],
            'image' => $image,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3
        ];

        $modul_items = json_decode($data['modul_items']);

        return new self([
            'category' => $data['category'],
            'sub_category' => $data['sub_category'],
            'collection' => $data['collection'],
            'full_name' => $full_name,
            'slug_full_name' => $slug_full_name,
            'small_name' => $small_name,
            'slug_small_name' => $slug_small_name,
            'article' => $data['article'],
            'imageArr' => $imageArr,
            'korpus' => $data['korpus'],
            'fasad' => $data['fasad'],
            'color_korpus_id' => $data['color_korpus_id'],
            'color_fasad_id' => $data['color_fasad_id'],
            'status' => $data['status'],
            'modul_items' => $modul_items
        ]);
    }

}
