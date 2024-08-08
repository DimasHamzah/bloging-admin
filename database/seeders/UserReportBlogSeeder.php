<?php

namespace Database\Seeders;

use App\Models\UserReportBlog;
use Illuminate\Database\Seeder;

class UserReportBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserReportBlog::factory(100)->create();
    }
}
