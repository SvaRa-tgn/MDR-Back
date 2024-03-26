<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\UpdateProfilePasswordAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateProfilePasswordController extends Controller
{
    public function updateProfilePassword(UpdateUserPasswordRequest $request, UpdateProfilePasswordAction $action): JsonResponse
    {
        return $action->execute($request);
    }
}
