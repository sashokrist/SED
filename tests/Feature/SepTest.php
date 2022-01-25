<?php

namespace Tests\Feature;

use App\Http\Controllers\SedController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SepTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSep()
    {
        $response = $this->get('/');
        $response2 = $this->get('/load-data');

        $input = 'jana is a beautiful dog, jana likes to play, jana likes to go out, jana is so cute.';
        $pattern = 'jana';
        $replace = 'JANA';
        $output = preg_replace("/".$pattern."/", $replace, $input);

        $response->assertStatus(200);
        $response2->assertStatus(405);
        $this->assertTrue(true);
        $this->assertNotEquals($output, $input);
        $this->assertEquals('jana', $pattern);
        $this->assertEquals('JANA', $replace);
        $this->assertNotEmpty($output);
    }
}
