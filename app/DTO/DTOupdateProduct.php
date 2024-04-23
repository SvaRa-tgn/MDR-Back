<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Product\UpdateProductRequest;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOupdateProduct extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $type;
    public string $collection;
    public string $type_collection;
    public string $full_name;
    public string $slug_full_name;
    public string $small_name;
    public string $slug_small_name;
    public string $article;
    public int $height;
    public int $width;
    public int $deep;
    public string $korpus;
    public string $fasad;
    public string $color_korpus_id;
    public string $color_fasad_id;
    public int $price;

    public static function fromUpdateProductRequest(UpdateProductRequest $request): self
    {
        $data = $request->validated();

        if(empty($data['category'])){
            $category = 'null';
        } else {
            $category = $data['category'];
        }

        if(empty($data['sub_category'])){
            $sub_category = 'null';
        } else {
            $sub_category = $data['sub_category'];
        }

        if(empty($data['type'])){
            $type = 'null';
        } else {
            $type = $data['type'];
        }

        if(empty($data['collection'])){
            $collection = 'null';
            $type_collection = 'null';
        } else {
            $collection = ItemCollectionRepository::itemCollectionFind($data['collection']);
            $type_collection = $collection->type_collection;
            $collection= $data['collection'];
        }

        if(empty($data['full_name'])){
            $full_name = 'null';
            $slug_full_name = 'null';
        } else {
            $lover = Str::lower($data['full_name']);
            $f_name = Str::title($lover);
            $full_name = $f_name;
            $slug_full_name = Transliterate::slugify($data['full_name']);
        }

        if(empty($data['small_name'])){
            $small_name = 'null';
            $slug_small_name = 'null';
        } else {
            $lover = Str::lower($data['small_name']);
            $s_name = Str::title($lover);
            $small_name = $s_name;
            $slug_small_name = Transliterate::slugify($data['small_name']);
        }

        if(empty($data['article'])){
            $article = 'null';
        } else {
            $article = $data['article'];
        }

        if(empty($data['height'])){
            $height = 0;
        } else {
            $height = $data['height'];
        }

        if(empty($data['width'])){
            $width = 0;
        } else {
            $width = $data['width'];
        }

        if(empty($data['deep'])){
            $deep = 0;
        } else {
            $deep = $data['deep'];
        }

        if(empty($data['korpus'])){
            $korpus = 'null';
        } else {
            $korpus = $data['korpus'];
        }

        if(empty($data['fasad'])){
            $fasad = 'null';
        } else {
            $fasad = $data['fasad'];
        }

        if(empty($data['color_korpus_id'])){
            $color_korpus_id = 'null';
        } else {
            $color_korpus_id = $data['color_korpus_id'];
        }

        if(empty($data['color_fasad_id'])){
            $color_fasad_id = 'null';
        } else {
            $color_fasad_id = $data['color_fasad_id'];
        }

        if(empty($data['price'])){
            $price = 0;
        } else {
            $price = $data['price'];
        }

        return new self([
            'category' => $category,
            'sub_category' => $sub_category,
            'type' => $type,
            'collection' => $collection,
            'type_collection' => $type_collection,
            'full_name' => $full_name,
            'slug_full_name' => $slug_full_name,
            'small_name' => $small_name,
            'slug_small_name' => $slug_small_name,
            'article' => $article,
            'height' => $height,
            'width' => $width,
            'deep' => $deep,
            'korpus' => $korpus,
            'fasad' => $fasad,
            'color_korpus_id' => $color_korpus_id,
            'color_fasad_id' => $color_fasad_id,
            'price' => $price,
        ]);
    }

}
