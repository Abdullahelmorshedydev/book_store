<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\FilesSettingsRequest;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Rawilk\Settings\Facades\Settings;

class FilesSettingsController extends Controller
{
    use UploadFile;

    public function index()
    {
        return view('admin.settings.files.index');
    }

    public function update(FilesSettingsRequest $request)
    {
        foreach($request->validated() as $key => $value) {
            $val = UploadFile::update($value, 'uploads/settings/', settings()->get($key), $value);
            Settings::set($key, $val);
        }

        return back()->with('success', __('admin/settings/files/index.success'));
    }
}
