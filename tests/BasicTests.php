<?php

use App\Circle;
use App\Rectangle;
use App\Square;
use App\Exceptions\WrongParamCountException;
use App\Exceptions\UnsupportedShapeException;
use App\GeometricShape;
use App\PolygonInterface;
use App\ShapeFactory;
use App\ShapeInterface;
use PHPUnit\Framework\TestCase;

class BasicTests extends TestCase
{  
    /* Circle Tests */ 
    public function testCircleCreateObject()
    {
        $circle = new Circle(4);

        $this->assertInstanceOf(Circle::class, $circle);
    }   

    public function testCircleName()
    {
        $circle = new Circle(4);
        
        $this->assertInstanceOf(ShapeInterface::class, $circle);
        $this->assertEquals("Circle", $circle->getName());
    }

    public function testCircleArea()
    {
        $circle = new Circle(4);

        $this->assertInstanceOf(ShapeInterface::class, $circle);
        $this->assertEquals(50.24, $circle->getArea());
    }

    public function testCirclePerimiter()
    {
        $circle = new Circle(4);

        $this->assertInstanceOf(ShapeInterface::class, $circle);
        $this->assertEquals(25.12, $circle->getPerimeter());
    }
    
    /* Shape Factory Tests */ 
    public function testShapeFactoryCircleCreateObject()
    {
        $circle = ShapeFactory::createShape("Circle", [4]);
        
        $this->assertInstanceOf(Circle::class, $circle);
    }    
}
