<?php


namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Footer\StoreRequest;

// Models
use App\Models\Footer;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Footer::firstOrCreate($data);
        return redirect()->route('admin.footer.index');
    }
}
