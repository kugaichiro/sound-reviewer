<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundReviewPostDetail extends Model
{
    use HasFactory;

    protected $table = 'sound_review_post_detail'; // テーブル名を明示指定

    public function soundReviewPost()
    {
        return $this->belongsTo(SoundReviewPost::class);
    }
}
