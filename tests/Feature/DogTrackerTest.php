<?php

namespace Tests\Feature;

use Tests\TestCase;

class DogTrackerTest extends TestCase
{
    public function test_dogtracker_loads(): void
    {
        $this
            ->get(route('hecko'))
            ->assertOk();
    }
}
