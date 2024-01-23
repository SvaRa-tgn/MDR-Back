<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\CreateProductRequest;
use App\Http\Requests\AdminPage\Product\UpdateProductRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateProduct extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $type;
    public string $type_modul;
    public string $item_modul;
    public string $item_ready;
    public string $full_name;
    public string $small_name;
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

        if(empty($data['type_modul'])){
            $type_modul = 'null';
        } else {
            $type_modul = $data['type_modul'];
        }

        if(empty($data['item_modul'])){
            $item_modul = 'null';
        } else {
            $item_modul = $data['item_modul'];
        }

        if(empty($data['item_ready'])){
            $item_ready = 'null';
        } else {
            $item_ready = $data['item_ready'];
        }

        if(empty($data['full_name'])){
            $full_name = 'null';
        } else {
            $full_name = $data['full_name'];
        }

        if(empty($data['small_name'])){
            $small_name = 'null';
        } else {
            $small_name = $data['small_name'];
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
            'type_modul' => $type_modul,
            'item_modul' => $item_modul,
            'item_ready' => $item_ready,
            'full_name' => $full_name,
            'small_name' => $small_name,
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