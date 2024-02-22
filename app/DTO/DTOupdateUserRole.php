<?php
namespace App\DTO;

use App\Http\Requests\AdminPage\Users\UpdateUserRoleRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateUserRole extends DataTransferObject
{
    public string $role;

    public static function fromUpdateUserRoleRequest(UpdateUserRoleRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'role' => $data['role']
        ]);
    }

}
