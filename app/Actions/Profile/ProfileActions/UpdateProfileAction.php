<?php


namespace App\Actions\Profile\ProfileActions;

use App\DTO\DTOupdateUser;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateProfileAction
{
    public function __construct(private ProfileRepository $profile){}

    public function execute(UpdateUserRequest $request): JsonResponse
    {
        $user = $this->profile->updateProfile(DTOupdateUser::fromUpdateUserRequest($request), $this->profile->profile());

        return response()->json(route('profile', ['name' => $user->slug_name, 'familia' => $user->slug_familia, 'father' => $user->slug_father_name]));
    }
}
