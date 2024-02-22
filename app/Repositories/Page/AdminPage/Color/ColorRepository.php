<?php

namespace App\Repositories\Page\AdminPage\Color;

use App\Models\Color;
use App\Repositories\Page\AdminPage\Color\Interfaces\ColorRepositoryInterfaces;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class ColorRepository implements ColorRepositoryInterfaces
{
    public function createColor($data)
    {
        $color = New Color();
        $color->color = $data->color;
        $color->slug_color = Transliterate::slugify($data->color);
        $path = Storage::putFile('public/color', $data->image);
        $url = Storage::url($path);
        $color->path = $path;
        $color->link = $url;
        $color->save();
    }

    public function color()
    {
        $colors = Color::all();

        return $colors;
    }

    public function editColor($slug_color)
    {
        $color = Color::where('slug_color', $slug_color)->first();

        if(empty($color) OR $color === null){
            return abort(404);
        } else {
            $id = $color->id;
            $name = $color->color;
            $slug_color = $color->slug_color;
            $image = $color->link;

            $color = collect(['id' => $id, 'name' => $name, 'slug_color' => $slug_color, 'image' => $image]);

            return $color;
        }
    }

    public function updateColor($data, $id)
    {
        $color = Color::find($id);

        if($data->color !== 'null'){
            $color->color = $data->color;
            $color->slug_color = Transliterate::slugify($data->color);
            $color->save();
        }

        if($data->image !== 'null'){
            Storage::delete($color->path);
            $path = Storage::putFile('public/color', $data->image);
            $url = Storage::url($path);
            $color->path = $path;
            $color->link = $url;
            $color->save();
        }

        return $color;
    }

    public function destroyColor($id)
    {
        $color = Color::find($id);

        Storage::delete($color->path);
        $color->delete();
    }

}
