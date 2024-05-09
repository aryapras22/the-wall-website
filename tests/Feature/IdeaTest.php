<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IdeaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testDelete(): void
    {
        $idea = Idea::where('id', 1)->firstOrFail();
        $idea->delete();
        $this->assertTrue($idea);
    }
}
