<?php


namespace App\Repository\Page\ProfilePage\Profile;


use App\Models\User;
use App\Repository\Page\ProfilePage\Profile\Interfaces\ProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function update($data)
    {
        $user = User::find(Auth::id());

        $user->name = $data->name;
        $user->familia = $data->familia;
        $user->father_name = $data->father_name;
        $user->phone = $data->phone;
        $user->save();
    }

    public function updatePassword($data)
    {
        $user = User::find(Auth::id());

        $user->password = bcrypt($data->password);
        $user->save();
    }

    public function show()
    {
        $user = User::find(Auth::id());

        return $user;
    }

}
