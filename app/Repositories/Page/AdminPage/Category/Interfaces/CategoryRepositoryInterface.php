<?php


namespace App\Repositories\Page\AdminPage\Category\Interfaces;


interface CategoryRepositoryInterface
{
    public function createCategory($data);

    public function showCategory();

    public function editCategory($id);

    public function  updateCategory($data, $id);

    public function destroy($id);
}
