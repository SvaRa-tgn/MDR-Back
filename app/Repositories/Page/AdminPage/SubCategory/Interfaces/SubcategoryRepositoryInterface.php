<?php


namespace App\Repositories\Page\AdminPage\SubCategory\Interfaces;


interface SubcategoryRepositoryInterface
{
    public function createSubCategory($data);

    public function subCategory();

    public function editSubCategory($slug_sub_category);

    public function updateSubCategory($data, $id);

    public function destroy($id);
}
