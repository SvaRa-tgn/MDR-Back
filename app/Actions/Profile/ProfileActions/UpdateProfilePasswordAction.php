<?php


namespace App\Actions\Profile\ProfileActions;

use App\DTO\DTOupdateUserPassword;
use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateProfilePasswordAction
{
    public function __construct(private ProfileRepository $profile){}

    public function execute(UpdateUserPasswordRequest $request): JsonResponse
    {
        $user = $this->profile->updateProfilePassword(DTOupdateUserPassword::fromUpdateUserPasswordRequest($request), $this->profile->profile());

        return response()->json(route('profile', ['name' => $user->slug_name, 'familia' => $user->slug_familia, 'father' => $user->slug_father_name]));
    }
}
