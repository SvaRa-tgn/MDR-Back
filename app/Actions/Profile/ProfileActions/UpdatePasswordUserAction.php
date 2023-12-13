<?php


namespace App\Actions\Profile\ProfileActions;

use App\DTO\DTOupdateUserPassword;
use App\Http\Requests\ProfilePage\Profile\UpdateUserPasswordRequest;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Support\Facades\Auth;
use Transliterate;

class UpdatePasswordUserAction
{
    public $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;

    }

    public function execute(UpdateUserPasswordRequest $request)
    {
        $this->action->updatePasswordUser(DTOupdateUserPassword::fromUpdateUserPasswordRequest($request));

        return redirect()->route('profile.user', ['name' => Transliterate::slugify(Auth::user()->name),
            'familia' => Transliterate::slugify(Auth::user()->familia),
            'father' => Transliterate::slugify(Auth::user()->father_name)])->with('success', 'Пароль изменен.');
    }
}
