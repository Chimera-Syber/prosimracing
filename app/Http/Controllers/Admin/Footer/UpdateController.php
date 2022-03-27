<?php


namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Footer\UpdateRequest;

// Models
use App\Models\Footer;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Footer $footer)
    {
        $data = $request->validated();
        $footer->update($data);
        return redirect()->route('admin.footer.index');
    }
}
