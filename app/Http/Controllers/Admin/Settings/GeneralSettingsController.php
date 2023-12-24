<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\GeneralSettingsRequest;
use Illuminate\Http\Request;
use Rawilk\Settings\Facades\Settings;

class GeneralSettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.general.index');
    }

    public function update(GeneralSettingsRequest $request)
    {
        foreach ($request->validated() as $key => $value) {
            Settings::set($key, $value,);
        }
        return back()->with('success', __('admin/settings/general/index.success'));
    }
}
