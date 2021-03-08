<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function getOne($id)
    {
        return Book::find($id);
    }
}
