<?php

namespace App\Http\Traits;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use PhpParser\Builder\Trait_;
use App\Models\EmailSetting;

trait loop
{
    public function getEmail()
    {
        $email_setting = EmailSetting::all();
        foreach($email_setting as $row)
        {
            return $row->email_send;
        }
    }
}
