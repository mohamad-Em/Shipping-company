<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\setting\email\StoreRequest;
use App\Http\Traits\imageTrait;
use App\Models\EmailSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmailSettingController extends Controller
{
    use imageTrait;
    public function index()
    {
        $setting = EmailSetting::first();
        return view('settings.email.index', compact('setting'));
    }
    public function store(StoreRequest $requset)
    {
        $setting = EmailSetting::first();
        if (!$setting) {
            //Create Code
            $data = $requset->all();
            $data['image'] = $this->saveImage($data['image'], 'images/settings/email');
            $store = EmailSetting::create($data);
            return redirect()->back();
        } else {
            //Update Code
            $setting = EmailSetting::first();
            $data = $requset->all();
            if ($requset->hasFile('image')) {
                $isExists = 'images/settings/' . $setting->image;
                if (File::exists($isExists)) {
                    File::delete($isExists);
                }
                $imagePath = 'images/settings';
                $data = $requset->all();
                $data['image'] = $this->saveImage($data['image'], $imagePath);
                $update = EmailSetting::find($setting['id'])->update($data);
                return redirect()->back();
            } else {
                $data = $requset->all();
                $update = EmailSetting::find($setting['id'])->update($data);
                return redirect()->back();
            }
        }
    }
}
