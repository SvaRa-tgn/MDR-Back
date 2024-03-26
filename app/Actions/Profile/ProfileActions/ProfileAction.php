<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use App\Services\Profile\ProfileService;
use Carbon\Carbon;
use Illuminate\View\View;

class ProfileAction
{
    public $action;
    public $service;

    public function __construct(ProfileRepository $action, ProfileService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute(): View
    {
        $user = $this->action->profile();

        if($user->date_of_birth === null){
            $data = 'Не указана';
        } else {
            $data = Carbon::parse($user->date_of_birth)->format('d.m.Y');
        }

        $head = $this->service->editTitle($user->familia.' '.$user->name.' '.$user->father_name);

        return view ('/app-page/profile-page/profile-box/profile-main', ['user'=>$user , 'data' => $data, 'head'=>$head]);
    }

}
