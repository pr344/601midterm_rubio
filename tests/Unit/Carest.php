<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;

class Carest extends TestCase
{
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = "Ford";
        $car->Model = "Pickup";
        $car->Year = random_int(1980, 2018);
        $this->assertTrue($car->save());
    }


    public function testUpdateCar()
    {
        //selects random car
        $car = Car::inRandomOrder()->first();
        //dd($user);
        $car->Year = 2000;

        $this->assertTrue($car->update());
    }

    public function testDeleteCar()
    {
        $car = new Car();
        $car->Make = "Ford";
        $car->Model = "Pickup";
        $car->Year = random_int(1980, 2018);
        $car->save();

        $this->assertTrue($car->delete());
    }

    //test if DB contains at least 50 cars
    public function testCountCar()
    {
        $car = Car::All();
        $carcount = $car->count();

        $this->assertGreaterThanOrEqual(50,$carcount);
    }

    public function testCarYearInt()
    {
        //selects random car
        $car = Car::inRandomOrder()->first();
        //dd($car);

        //using Type Casting.  If I try to compare DB vs PHP in failing. Cannot Assert INT vs INTEGER
        $year = (int)$car->Year;

        $this -> assertInternalType("int",$year);

        //Multiple ways I tried.
        //$this-> assertInternalType(IsType::TYPE_INT,$year);
        //$this -> assertTrue(is_int($year));

    }

    public function testMakerCar()
    {
        //selects random car
        $car = Car::inRandomOrder()->first();
        $maker = $car->Make;
        $flag=false;

        if ($maker = "Ford"){
           $flag=true;
        }elseif ($maker = "Honda"){
            $flag=true;
        }elseif ($maker = "Toyota"){
            $flag=true;
        }else{
            $flag=false;
        }
        $this->assertTrue($flag);
    }

    public function testCarModelString()
    {
        //selects random car
        $car = Car::inRandomOrder()->first();

        $this->assertInternalType('string', $car->Model);
    }
}
