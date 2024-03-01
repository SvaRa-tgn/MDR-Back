<?php


namespace App\Repositories\Page\Users;

use App\DTO\DTOupdateUser;
use App\DTO\DTOupdateUserPassword;
use App\DTO\DTOupdateUserRole;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Transliterate;

class UsersRepository
{
    public function searchUsers($data): array
    {
        return User::where('email', 'LIKE', '%'.$data->search.'%')->get()->toArray();
    }

    public function editUser($id): User
    {
        return User::find($id);
    }

    public function updateUser(DTOupdateUser $dto, $id): User
    {
        $user = User::find($id);

        if ($dto->name !== 'null'){
            $user->name = $dto->name;
            $user->slug_name = $dto->slug_name;
        }

        if ($dto->familia !== 'null'){
            $user->familia = $dto->familia;
            $user->slug_familia = $dto->slug_familia;
        }

        if ($dto->father_name !== 'null'){
            $user->father_name = $dto->father_name;
            $user->slug_father_name = $dto->slug_father_name;
        }

        if ($dto->phone !== 'null'){
            $user->phone = $dto->phone;
        }

        $user->save();

        return $user;
    }

    public function updateUserPassword(DTOupdateUserPassword $dto, $id): User
    {
        $user = User::find($id);

        $user->password = Hash::make($dto->password);
        $user->save();

        return $user;
    }

    public function destroyUser($id): void
    {
        $user = User::find($id);

        $user->delete();
    }

    public function updateUserRole(DTOupdateUserRole $dto, $id): User
    {
        $user = User::find($id);

        $user->role = $dto->role;
        $user->save();

        return $user;
    }
}
