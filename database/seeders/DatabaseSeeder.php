<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogTagSeeder::class);
        $this->call(UserKomentarBlogSeeder::class);
        $this->call(UserLikeBlogSeeder::class);
        $this->call(UserRatingBlogSeeder::class);
        $this->call(UserReportBlogSeeder::class);
    }
}
