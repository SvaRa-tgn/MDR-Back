<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\UpdateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePage\Profile\UpdateUserRequest;
use Transliterate;

class UpdateUserController extends Controller
{
    public function updateUser(UpdateUserRequest $request, UpdateUserAction $action)
    {
        return $action->execute($request);
    }

}
