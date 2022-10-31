<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Event;

class DestroyEventController extends Controller
{
    public function __invoke($id)
    {
        $event = Event::withTrashed()->find($id);
        $event->forceDelete();
        return redirect()->route('admin.trash.index');
    }
}
