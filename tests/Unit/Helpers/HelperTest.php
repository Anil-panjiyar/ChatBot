<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Helper;

class HelperTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function test_it_returns_corect_age()
    // {
    //     $dob= "2000/08/09";
    //     $response = Helper::getAge($dob);
    //     //dd($response);
    //     $this->assertEquals($response,"22year");
    // }
    public function test_it_returns_correct_age()
{
    $dob = "2000-08-09";
    $response = Helper::getAge($dob);
    $this->assertEquals($response, "22 years");
}


}
