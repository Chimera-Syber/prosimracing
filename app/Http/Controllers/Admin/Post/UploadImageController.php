<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Post\UploadImageRequest;

// Models
use App\Models\Post;

// Facades 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\File;

class UploadImageController extends Controller
{
    public static function imageUploadEditorJS(UploadImageRequest $request)
    {
        if ($request->hasFile('image')) {
            $site_url = App::make('url')->to('/');
            $mainFolder = config('app.image_upload_editor_js_folder');
            $folder = date('Y-m-d');
            $path = $request->file('image')->store("/images/{$folder}");
            $output = [
                'success' => '1',
                'file' => [
                    'url' => $site_url . $mainFolder . $path,
                ],
            ];
            return json_encode($output);
        } else {
            return null;
        }
    }
}
