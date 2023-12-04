<?php


namespace App\Repository\Page\AdminPage\Category\Interfaces;


interface CategoryRepositoryInterface
{
    public function create($data);

    public function show();

    public function edit($id);

    public function  update($data, $id);

    public function destroy($id);
}
