<?php


namespace App\Repositories\Page\ProfilePage\Profile\Interfaces;


interface ProfileRepositoryInterface
{
    public function updateUser($data);

    public function updatePasswordUser($data);

    public function showUser();

    public function destroyUser($user);
}
