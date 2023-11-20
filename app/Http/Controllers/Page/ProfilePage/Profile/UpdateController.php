<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\DTO\DTOupdateUser;
use App\Http\Requests\Page\ProfilePage\Profile\UpdateRequest;
use App\Services\Page\ProfilePage\Profile\ProfileService;

class UpdateController extends ProfileService
{
    public function userUpdate(UpdateRequest $request)
    {
        $data = New DTOupdateUser($request->validated());
        $this->service->update($data);

        return redirect()->route('profile.show', ['name'=>str_slug($data->name), 'familia'=>str_slug($data->familia), 'father'=>str_slug($data->father_name)])->with('success', 'Изменения сохраннены.');
    }

}
