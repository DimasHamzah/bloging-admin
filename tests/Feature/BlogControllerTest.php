<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\User;
use Tests\TestCase;

class BlogControllerTest extends TestCase
{
    public function blog()
    {
        return Blog::factory(10)->create();
    }

    public function user()
    {
        return User::factory()->create();
    }

    public function testIndexSuccess()
    {
        $this->blog();

        $response = $this->actingAs($this->user())->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('dashboard');
        $response->assertViewHas('blogs');
    }

    public function testIndexFailed()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function testCreateFailed()
    {
        $response = $this->get('/create');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function testCreateSuccess()
    {
        $response = $this->actingAs($this->user())->get('/create');

        $response->assertStatus(200);
        $response->assertViewIs('admin.blog.create');
    }
}
