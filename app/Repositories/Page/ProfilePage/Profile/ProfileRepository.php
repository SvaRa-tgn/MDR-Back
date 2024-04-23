<?php


namespace App\Repositories\Page\ProfilePage\Profile;

use App\DTO\DTOupdateUser;
use App\DTO\DTOupdateUserPassword;
use App\Models\User;
use App\Repositories\Page\ProfilePage\Profile\Interfaces\ProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function profile(): User
    {
        return User::find(Auth::id());
    }

    public function updateProfile(DTOupdateUser $dto, User $user): User
    {

        if ($dto->name !== 'null'){
            $user->name = $dto->name;
        }

        if ($dto->familia !== 'null'){
            $user->familia = $dto->familia;
        }

        if ($dto->father_name !== 'null'){
            $user->father_name = $dto->father_name;
        }

        if ($dto->phone !== 'null'){
            $user->phone = $dto->phone;
        }

        if ($dto->date_of_birth !== 'null'){
            $user->date_of_birth = $dto->date_of_birth;
        }

        if ($dto->gender !== 'null'){
            $user->gender = $dto->gender;
        }

        $user->save();

        return $user;
    }

    public function updateProfilePassword(DTOupdateUserPassword $dto, User $user): User
    {
        $user->password = Hash::make($dto->password);
        $user->save();

        return $user;
    }

    public function destroyProfile(User $user): void
    {
        $user->delete();
    }

}
