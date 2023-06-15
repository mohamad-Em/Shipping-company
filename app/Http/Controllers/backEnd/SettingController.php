<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\setting\SettingRequest;
use App\Http\Traits\imageTrait;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    use imageTrait;
    public function index()
    {
        $setting = Setting::first();
        return view('settings.index', compact('setting'));
    }
    public function store(SettingRequest $requset)
    {
        $setting = Setting::first();
        if (!$setting) {
            //Create Code
            $data = $requset->all();
            $data['logo'] = $this->saveImage($data['logo'], 'images/settings');
            $store = Setting::create($data);
            return redirect()->back();
        } else {
            //Update Code
            $setting = Setting::first();
            $data = $requset->all();
            if ($requset->hasFile('logo')) {
                $isExists = 'images/settings/' . $setting->logo;
                if (File::exists($isExists)) {
                    File::delete($isExists);
                }
                $imagePath = 'images/settings';
                $data = $requset->all();
                $data['logo'] = $this->saveImage($data['logo'], $imagePath);
                $update = Setting::find($setting['id'])->update($data);
                return redirect()->back();
            } else {
                $data = $requset->all();
                $update = Setting::find($setting['id'])->update($data);
                return redirect()->back();
            }
        }
    }
}
