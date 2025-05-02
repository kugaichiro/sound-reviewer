<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundReviewPost extends Model
{
    use HasFactory;

    public function soundReviewPostDetail()
    {
        return $this->hasMany(SoundReviewPostDetail::class);
    }
}
