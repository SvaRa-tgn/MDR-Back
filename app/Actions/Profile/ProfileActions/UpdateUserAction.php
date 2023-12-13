<?php


namespace App\Actions\Profile\ProfileActions;


use App\DTO\DTOupdateUser;
use App\Http\Requests\ProfilePage\Profile\UpdateUserRequest;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Support\Facades\Auth;
use Transliterate;

class UpdateUserAction
{
    public $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;

    }

    public function execute(UpdateUserRequest $request)
    {
        $this->action->updateUser(DTOupdateUser::fromUpdateUserRequest($request));

        return redirect()->route('profile.user', ['name' => Transliterate::slugify(Auth::user()->name),
            'familia' => Transliterate::slugify(Auth::user()->familia),
            'father' => Transliterate::slugify(Auth::user()->father_name)])->with('success', 'Изменения сохранены.');
    }
}
