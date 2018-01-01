<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Stock;

class StockTest extends TestCase
{
    /*
    public function testExample()
    {
        $this->assertTrue(true);
    }
    */

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      $stock = new Stock(['name'=>'Tesla']);
      $this->assertEquals('Tesla', $stock->name);
    }
}
