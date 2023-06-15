<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Book;
class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;
    protected $table = 'customes';
    protected $fillable = [
        'name' , 'email' , 'password' , 'fullName' , 'phone' , 'image'
    ];
    public function books()
    {
        return $this->hasMany(Book::class,'customer_id');
    }
}
