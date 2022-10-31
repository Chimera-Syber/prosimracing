<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Event;

class RestoreEventController extends Controller
{
    public function __invoke($id)
    {
        $event = Event::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
