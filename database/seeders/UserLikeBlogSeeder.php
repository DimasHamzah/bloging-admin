<?php

namespace Database\Seeders;

use App\Models\UserLikeBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserLikeBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserLikeBlog::factory(5)->create();
    }
}
