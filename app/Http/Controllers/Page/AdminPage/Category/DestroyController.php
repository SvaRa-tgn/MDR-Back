<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Http\Requests\Page\AdminPage\Category\DestroyRequest;
use App\Services\Page\AdminPage\Category\CategoryService;
use Illuminate\Http\Request;

class DestroyController extends CategoryService
{
    public function destroy(Request $request, $id)
    {

        $this->service->destroy($id);

        return redirect()->route('category.show')->with('success', 'Категория удалена');

    }

}
