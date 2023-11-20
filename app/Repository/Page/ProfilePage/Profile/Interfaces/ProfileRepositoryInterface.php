<?php


namespace App\Repository\Page\ProfilePage\Profile\Interfaces;


interface ProfileRepositoryInterface
{
    public function update($data);

    public function updatePassword($data);

    public function show();
}
