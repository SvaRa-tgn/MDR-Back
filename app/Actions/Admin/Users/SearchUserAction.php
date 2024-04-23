<?php

namespace App\Actions\Admin\Users;

use App\DTO\DTOsearchUser;
use App\Http\Requests\AdminPage\Users\SearchUserRequest;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;

class SearchUserAction
{
    public function __construct(private UsersRepository $repository){}

    public function execute(SearchUserRequest $request): JsonResponse
    {
        return response()->json($this->repository->searchUsers(DTOsearchUser::fromSearchUserRequest($request)));
    }

}
