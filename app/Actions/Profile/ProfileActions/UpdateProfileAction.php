<?php


namespace App\Actions\Profile\ProfileActions;

use App\DTO\DTOupdateUser;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateProfileAction
{
    public ProfileRepository $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;
    }

    public function execute(UpdateUserRequest $request): JsonResponse
    {
        $user = $this->action->updateProfile(DTOupdateUser::fromUpdateUserRequest($request));

        return response()->json(route('profile', ['name' => $user->slug_name, 'familia' => $user->slug_familia, 'father' => $user->slug_father_name]));
    }
}
