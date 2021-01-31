<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'book_info';

     protected $fillable = [ 'book_title', 'author_name','student_name',
     'contact_number','issue_books','return_books'];
}
