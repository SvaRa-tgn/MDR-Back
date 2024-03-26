<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\SearchUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Users\SearchUserRequest;
use Illuminate\Http\JsonResponse;

class SearchUserController extends Controller
{
    public function searchUser(SearchUserAction $action, SearchUserRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
