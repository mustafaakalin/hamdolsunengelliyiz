<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    public function test_the_home_page_returns_a_successful_response(): void
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_the_orthopedic_page_returns_a_successful_response(): void
    {
        $this->get('/ortopedik')->assertStatus(200);
    }

    public function test_the_spinal_cord_page_returns_a_successful_response(): void
    {
        $this->get('/omurilik')->assertStatus(200);
    }

    public function test_the_vision_page_returns_a_successful_response(): void
    {
        $this->get('/gorme')->assertStatus(200);
    }

    public function test_the_hearing_page_returns_a_successful_response(): void
    {
        $this->get('/isitme')->assertStatus(200);
    }

    public function test_the_spastic_page_returns_a_successful_response(): void
    {
        $this->get('/spastik')->assertStatus(200);
    }

    public function test_the_about_page_returns_a_successful_response(): void
    {
        $this->get('/ben')->assertStatus(200);
    }
}
