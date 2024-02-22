<?php


namespace App\Repositories\Page\Users;

use App\Models\User;
use Transliterate;

class UsersRepository
{
    public function searchUsers($data)
    {
        $users = User::where('email', 'LIKE', '%'.$data->search.'%')->get()->toArray();

        return $users;
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function updateUser($data, $id)
    {
        $user = User::find($id);

        if ($data->name !== 'null'){
            $user->name = $data->name;
        }

        if ($data->familia !== 'null'){
            $user->familia = $data->familia;
        }

        if ($data->father_name !== 'null'){
            $user->father_name = $data->father_name;
        }

        if ($data->phone !== 'null'){
            $user->phone = $data->phone;
        }

        $user->save();
    }

    public function updateUserPassword($data, $id)
    {
        $user = User::find($id);

        $user->password = bcrypt($data->password);
        $user->save();
    }

    public function destroyUser($id)
    {
        $user = User::find($id);

        $user->delete();
    }

    public function updateUserRole($data, $id)
    {
        $user = User::find($id);

        $user->role = $data->role;
        $user->save();

        return $user;
    }
}
