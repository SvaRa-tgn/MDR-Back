<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\CreateProductRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOcreateProduct extends DataTransferObject
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
    public string $status;
    public string $image_top;
    public string $image;
    public string $image1;
    public string $image2;
    public string $image3;
    public string $korpus;
    public string $fasad;
    public string $color_korpus_id;
    public string $color_fasad_id;
    public int $price;

    public static function fromCreateProductRequest(CreateProductRequest $request): self
    {
        $data = $request->validated();

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

        return new self([
            'category' => $data['category'],
            'sub_category' => $data['sub_category'],
            'type' => $data['type'],
            'type_modul' => $type_modul,
            'item_modul' => $item_modul,
            'item_ready' => $item_ready,
            'full_name' => $data['full_name'],
            'small_name' => $data['small_name'],
            'article' => $data['article'],
            'height' => $data['height'],
            'width' => $data['width'],
            'deep' => $data['deep'],
            'status' => $data['status'],
            'image_top' => $data['image_top'],
            'image' => $image,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'korpus' => $data['korpus'],
            'fasad' => $data['fasad'],
            'color_korpus_id' => $data['color_korpus_id'],
            'color_fasad_id' => $data['color_fasad_id'],
            'price' => $data['price'],
        ]);
    }

}