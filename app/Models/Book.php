<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Rate;
use App\Models\Customer;
use App\Models\Note;
class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'customer_id', 'rate_id', 'user_id', 'status',
        'evgm_id', 'operation_id'
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function rate()
    {
        return $this->belongsTo(Rate::class, 'rate_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function notes()
    {
        return $this->hasMany(Note::class,'user_id');
    }
}
