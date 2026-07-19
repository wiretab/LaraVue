<?php

namespace Tests\Unit;

use Tests\TestCase;



class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_basic_example(): void {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
