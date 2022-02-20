<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Support and Facades
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


// Requests
use App\Http\Requests\Admin\User\UpdateRequest;

// Models
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['password'])) {
            $password = $data['password'];
            $data['password'] = Hash::make($password);
        }

        if (!$request->password) {
            unset($data['password']);
        }

        $user->update($data);
        return redirect()->route('admin.user.index');
    }
}
