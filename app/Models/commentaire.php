<?php

namespace App\Models;

use App\Models\User;
use App\Models\article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commentaire extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function article()
    {
        return $this->belongTo(article::class);
    }
}
