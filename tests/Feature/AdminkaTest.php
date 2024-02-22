<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminkaTest extends TestCase
{
    /**@test*/
    public function test_access_adminka()
    {
        $this->withoutMiddleware();
        $this->get(route('adminka'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_adminka_category_page()
    {
        $this->withoutMiddleware();
        $this->get(route('category'))->assertStatus(200);
    }

    /**@test*/
    public function test_category_create()
    {
        $this->withExceptionHandling();

        $this->withoutMiddleware();

        Storage::fake('catalog');
        $image = File::create('image.jpg');

        $data = [
            'category'=>'adasdasda',
            'slug_category'=>'adasdasda',
            'image'=>$image
        ];

        $this->post(route('createCategory'), $data)->assertStatus(302);

    }

}
