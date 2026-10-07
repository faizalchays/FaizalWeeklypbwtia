<?php

namespace Tests\Feature;

use Database\Seeders\BeritaSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed(BeritaSeeder::class);
    }

    public function test_each_page_is_reachable_from_the_shared_navigation(): void
    {
        $pages = [
            '/' => 'home',
            '/home' => 'home.index',
            '/berita' => 'berita',
            '/profile' => 'profile',
            '/contact' => 'contact',
        ];

        foreach ($pages as $path => $activeRoute) {
            $response = $this->get($path);
            $activeHref = in_array($activeRoute, ['home', 'home.index'], true)
                ? route('home')
                : route($activeRoute);

            $response->assertOk()
                ->assertSee(route('home'), false)
                ->assertSee(route('berita'), false)
                ->assertSee(route('profile'), false)
                ->assertSee(route('contact'), false)
                ->assertSee('class="nav-link active" href="'.$activeHref.'"', false);
        }
    }

    public function test_berita_page_displays_the_news_data(): void
    {
        $this->get('/berita')
            ->assertOk()
            ->assertSee('mbg mas burhan gunawan')
            ->assertSee(route('berita.show', 'mbg-mas-burhan-gunawan'), false)
            ->assertSee('2024-06-01')
            ->assertSee('Lorem ipsum dolor sit amet');
    }

    public function test_berita_slug_opens_the_matching_news_detail(): void
    {
        $this->get('/berita/indonesia-juara-asean')
            ->assertOk()
            ->assertSee('Indonesia juara asean')
            ->assertSee('2024-06-02')
            ->assertSee('Kembali ke daftar berita');
    }

    public function test_unknown_berita_slug_returns_not_found(): void
    {
        $this->get('/berita/slug-tidak-ada')->assertNotFound();
    }
}
