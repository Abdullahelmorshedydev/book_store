<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rawilk\Settings\Facades\Settings;
use App\Http\Requests\Admin\Settings\LinksSettingsRequest;

class LinksSettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.links.index');
    }

    public function update(LinksSettingsRequest $request)
    {
        foreach ($request->validated() as $key => $value) {
            Settings::set($key, $value,);
        }
        return back()->with('success', __('admin/settings/links/index.success'));
    }
}
