<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\User;

class RestoreUserController extends Controller
{
    public function __invoke($id)
    {
        $user = User::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
