<?php
namespace App\Repositories\Page\AdminPage\Color\Interfaces;


interface ColorRepositoryInterfaces
{
    public function createColor($data);

    public function color();

    public function editColor($slug_color);

    public function  updateColor($data, $id);

    public function destroyColor($id);
}
