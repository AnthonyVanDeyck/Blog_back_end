<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $fillable = ["titre", "article", "media", "user_name", "created_at", "updated_at"];
}
