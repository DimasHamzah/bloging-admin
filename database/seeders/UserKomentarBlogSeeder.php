<?php

namespace Database\Seeders;

use App\Models\UserKomentarBlog;
use Illuminate\Database\Seeder;

class UserKomentarBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserKomentarBlog::factory(5)->create();
    }
}
