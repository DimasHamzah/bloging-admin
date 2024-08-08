<?php

namespace Database\Seeders;

use App\Models\UserRatingBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRatingBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRatingBlog::factory(100)->create();
    }
}
