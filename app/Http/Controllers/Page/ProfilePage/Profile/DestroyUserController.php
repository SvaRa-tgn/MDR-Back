<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\UserDestroyAction;
use App\Actions\Profile\ProfileActions\UpdatePasswordUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePage\Profile\UpdateUserPasswordRequest;
use Illuminate\Http\Request;

class DestroyUserController extends Controller
{
    public function destroyUser(UserDestroyAction $action, $user)
    {
        return $action->execute($user);
    }

}
