<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\UpdatePasswordUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePage\Profile\UpdateUserPasswordRequest;
use Transliterate;

class UpdatePasswordUserController extends Controller
{
    public function updatePasswordUser(UpdateUserPasswordRequest $request, UpdatePasswordUserAction $action)
    {
        return $action->execute($request);
    }
}
