<?php


namespace App\Repositories\Page\ProfilePage\Profile;

use App\Models\User;
use App\Repositories\Page\ProfilePage\Profile\Interfaces\ProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProfileRepository implements ProfileRepositoryInterface
{

    public function updateUser($data)
    {
        $user = User::find(Auth::id());

        $user->name = $data->name;
        $user->familia = $data->familia;
        $user->father_name = $data->father_name;
        $user->phone = $data->phone;
        $user->save();
    }

    public function updatePasswordUser($data)
    {
        $user = User::find(Auth::id());

        $user->password = bcrypt($data->password);
        $user->save();
    }

    public function showUser()
    {
        $user = User::find(Auth::id());

        return $user;
    }

    public function destroyUser($user)
    {
        $user = User::find($user);
        $user->delete();
    }

}
