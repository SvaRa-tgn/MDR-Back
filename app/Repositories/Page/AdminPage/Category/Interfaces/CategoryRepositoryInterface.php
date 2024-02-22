<?php


namespace App\Repositories\Page\AdminPage\Category\Interfaces;


use App\DTO\DTOcreateCategory;

interface CategoryRepositoryInterface
{
    public function createCategory(DTOcreateCategory $data);

    public function category();

    public function editCategory($id);

    public function  updateCategory($data, $id);

    public function destroy($id);
}
