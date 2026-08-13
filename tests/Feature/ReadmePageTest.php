<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use App\Models\About;
use App\Models\Hearing;
use App\Models\Orthopedic;
use App\Models\Spastic;
use App\Models\Spinalcord;
use App\Models\Vision;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadmePageTest extends TestCase
{
    use RefreshDatabase;

    private function createContentModels(): void
    {
        $user = User::factory()->create();

        $models = [
            Orthopedic::class,
            Spinalcord::class,
            Vision::class,
            Hearing::class,
            Spastic::class,
        ];

        foreach ($models as $model) {
            $model::create([
                'user_id' => $user->id,
                'name' => 'Celil Uzun',
                'slug' => 'celil-uzun',
                'title' => 'Example title',
                'description' => 'Example content',
            ]);
        }

        About::create([
            'user_id' => $user->id,
            'name' => 'Celil Uzun',
            'slug' => 'celil-uzun',
            'title' => 'Example title',
            'description' => 'Example about content',
        ]);
    }

    public function test_readme_page_returns_successful_response_for_existing_slug(): void
    {
        $this->createContentModels();

        $this->get('/benioku/celil-uzun')
            ->assertStatus(200)
            ->assertSee('Celil Uzun');
    }

    public function test_readme_page_returns_successful_response_for_unknown_slug(): void
    {
        $this->get('/benioku/unknown-person')->assertStatus(200);
    }

    public function test_readme_page_contains_all_sections(): void
    {
        $this->createContentModels();

        $response = $this->get('/benioku/celil-uzun');

        $response->assertStatus(200)
            ->assertSee('Ortopedik')
            ->assertSee('Omurilik')
            ->assertSee('Görme')
            ->assertSee('İşitme')
            ->assertSee('Spastik');
    }
}
