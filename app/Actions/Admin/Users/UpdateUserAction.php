<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUser;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateUserAction
{
    public function __construct(private UsersRepository $repository){}

    public function execute(UpdateUserRequest $request, int $id): JsonResponse
    {
        $this->repository->updateUser(DTOupdateUser::fromUpdateUserRequest($request), $this->repository->userFind($id));

        return response()->json(route('editUser', $id));
    }
}
