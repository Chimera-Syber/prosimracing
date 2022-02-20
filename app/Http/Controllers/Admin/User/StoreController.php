<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Support and Facades
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


// Requests
use App\Http\Requests\Admin\User\StoreRequest;

// Models
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $password = $data['password'];
        $data['password'] = Hash::make($password);
        User::firstOrCreate([ 'email' => $data['email']], $data);
        return redirect()->route('admin.user.index');
    }
}
