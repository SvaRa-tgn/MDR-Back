<?php


namespace App\Repositories\Page\ProfilePage\Profile\Interfaces;


use App\DTO\DTOupdateUser;
use App\DTO\DTOupdateUserPassword;
use App\Models\User;

interface ProfileRepositoryInterface
{
    public function profile(): User;

    public function updateProfile(DTOupdateUser $dto, User $user): User;

    public function updateProfilePassword(DTOupdateUserPassword $dto, User $user): User;

    public function destroyProfile(User $user): void;
}
