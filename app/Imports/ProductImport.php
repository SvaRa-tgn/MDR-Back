<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\SubCategory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Transliterate;

class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(isset($row['category']) && $row['category'] !== null){
            $category_id = Category::where('category', $row['category'])->pluck('id');
            $sub_category_id = SubCategory::where('sub_category', $row['sub_category'])->pluck('id');
            $slug_full_name = Transliterate::slugify($row['full_name']);
            $slug_small_name = Transliterate::slugify($row['small_name']);
            $color_korpus_id = Color::where('color', $row['color_korpus'])->pluck('id');
            $color_fasad_id = Color::where('color', $row['color_fasad'])->pluck('id');

            Product::firstOrCreate([
                'full_name'    => $row['full_name'],
            ],[
                'category_id'     => $category_id[0],
                'sub_category_id'    => $sub_category_id[0],
                'type'    => $row['type'],
                'type_modul'    => $row['type_modul'],
                'item_modul'    => $row['item_modul'],
                'item_ready'    => $row['item_ready'],
                'full_name'    => $row['full_name'],
                'slug_full_name'    => $slug_full_name,
                'small_name'    => $row['small_name'],
                'slug_small_name'    => $slug_small_name,
                'article'    => $row['article'],
                'height'    => $row['height'],
                'width'    => $row['width'],
                'deep'    => $row['deep'],
                'status'    => 'Не публиковать',
                'price'    => $row['price'],
                'korpus'    => $row['korpus'],
                'fasad'    => $row['fasad'],
                'color_korpus_id'    => $color_korpus_id[0],
                'color_fasad_id'    => $color_fasad_id[0],
            ]);
        }
    }
}
