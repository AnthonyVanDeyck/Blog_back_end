<?php

namespace App\Models;

use App\Models\User;
use App\Models\commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class article extends Model
{
    use HasFactory;

    protected $fillable = ["titre", "article", "media", "user_name", "created_at", "updated_at"];

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function commentaire()
    {
        return $this->hasMany(commentaire::class);
    }
}
