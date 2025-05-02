<?php

namespace Database\Seeders;

use App\Models\SoundReviewPost;
use App\Models\SoundReviewPostDetail;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $soundreviewpost = SoundReviewPost::factory()->create();
        SoundReviewPostDetail::factory()->create([
            'sound_review_post_id' => $soundreviewpost->id,
        ]);
    }
}
