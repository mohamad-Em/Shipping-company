<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSetting extends Model
{
    use HasFactory;
    protected $table = 'emailsettings';
    protected $fillable = [
        'email_send' , 'title' , 'body' , 'ending' , 'image'
    ];
}
