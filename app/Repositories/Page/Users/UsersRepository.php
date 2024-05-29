<?php


namespace App\Repositories\Page\Users;

use App\DTO\DTOchangeMail;
use App\DTO\DTOsearchUser;
use App\DTO\DTOupdateUser;
use App\DTO\DTOupdateUserPassword;
use App\DTO\DTOupdateUserRole;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Transliterate;

class UsersRepository
{
    public function userFind(int $id): User
    {
        return User::findOrFail($id);
    }

    public function changeMail(User $user, DTOchangeMail $dto): User
    {
        $user->email = $dto->email;

        $user->save();

        return $user;
    }

    public function searchUsers(DTOsearchUser $dto): array
    {
        return User::where('email', 'LIKE', '%'.$dto->search.'%')->get()->toArray();
    }

    public function updateUser(DTOupdateUser $dto, User $user): User
    {
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

    public function updateUserPassword(DTOupdateUserPassword $dto, User $user): User
    {
        $user->password = Hash::make($dto->password);
        $user->save();

        return $user;
    }

    public function destroyUser(User $user): void
    {
        $user->delete();
    }

    public function updateUserRole(DTOupdateUserRole $dto, User $user): User
    {
        $user->role = $dto->role;
        $user->save();

        return $user;
    }
}
