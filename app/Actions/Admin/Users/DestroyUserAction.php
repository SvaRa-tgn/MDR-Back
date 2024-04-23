<?php
namespace App\Actions\Admin\Users;

use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class DestroyUserAction
{
    public function __construct(private UsersRepository $repository){}

    public function execute(int $id): JsonResponse
    {
        $this->repository->destroyUser($this->repository->userFind($id));

        return response()->Json(route('users'));
    }
}
