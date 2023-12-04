<?php

namespace App\Http\Resources\Page\AdminPage\Category;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'category' => $this->name,
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('X-Value', 'True');
    }
}
