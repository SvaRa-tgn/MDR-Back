<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\UpdateProfileAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateProfileController extends Controller
{
    public function updateProfile(UpdateUserRequest $request, UpdateProfileAction $action): JsonResponse
    {
        return $action->execute($request);
    }

}
