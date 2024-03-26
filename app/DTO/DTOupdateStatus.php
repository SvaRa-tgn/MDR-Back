<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\UpdateStatusRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateStatus extends DataTransferObject
{
    public string $status;

    public static function fromUpdateStatusRequest(UpdateStatusRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'status' => $data['status_product']
        ]);
    }

}
