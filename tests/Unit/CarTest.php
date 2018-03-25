<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = "Ford";
        $car->Model = "Pickup";
        $car->Year = random_int(1980, 2018);
        $this->assertTrue($car->save());
    }

}
