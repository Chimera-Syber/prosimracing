<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::paginate(20);
        return view('admin.user.index', compact('users'));
    }
}
