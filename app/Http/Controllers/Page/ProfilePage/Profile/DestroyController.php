<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroy(Request $request, $user)
    {
        $user = User::find($user);
        $user->delete();
        return redirect()->route('/.index')->with('success', 'Пользователь удален');
    }

}
