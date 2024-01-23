<?php
namespace App\Repositories\Page\AdminPage\Product\Interfaces;


interface ProductRepositoryInterfaces
{
    public function sample($id);

    public function sampleProducts($data);

    public function subCategoriesShow();

    public function modulCollectionShow();

    public function readyCollectionShow();

    public function colorShow();

    public function createProduct($data);

    public function showUpdateProduct($slug_full_name);

    public function showImageProduct($slug_full_name);

    public function updateStatus($data, $id);

    public function addImage($data, $id);

    public function updateImage($data, $id);

    public function destroyImage($data, $id);

    public function updateData($data, $id);

    public function destroyProduct($id);

    public function searchProduct($data);
}
