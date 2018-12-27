<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\NextDayCalculatorController;

class NextDayCalculator extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTriangleClassifier()
    {
        $result = new NextDayCalculatorController();
        $this->assertEquals('2/1/2018', $result->calculator('1/1/2018'));
        $this->assertEquals('1/2/2018', $result->calculator('1/31/2018'));
        $this->assertEquals('1/5/2018', $result->calculator('4/30/2018'));
        $this->assertEquals('1/3/2018', $result->calculator('2/28/2018'));
        $this->assertEquals('29/2/2020', $result->calculator('2/28/2020'));
        $this->assertEquals('1/1/2019', $result->calculator('12/31/2018'));

    }
}
