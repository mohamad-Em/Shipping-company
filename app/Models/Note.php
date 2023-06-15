<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\User;
class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'title' , 'date' , 'book_id' , 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function book()
    {
        return $this->belongsTo(Book::class,'book_id');
    }
}
