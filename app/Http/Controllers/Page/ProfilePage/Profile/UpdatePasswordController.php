<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\DTO\DTOupdateUserPassword;
use App\Http\Requests\Page\ProfilePage\Profile\UpdatePasswordRequest;
use App\Services\Page\ProfilePage\Profile\ProfileService;
use Illuminate\Support\Facades\Auth;

class UpdatePasswordController extends ProfileService
{
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $data = New DTOupdateUserPassword($request->validated());
        $this->service->updatePassword($data);

        return redirect()->route('profile.show', ['name'=>str_slug(Auth::user()->name), 'familia'=>str_slug(Auth::user()->familia), 'father'=>str_slug(Auth::user()->father_name)])->with('success', 'Пароль изменён.');
    }
}
