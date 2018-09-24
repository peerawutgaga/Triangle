<?php

use PHPUnit\Framework\TestCase;

use Triangle\Triangle;

class TriangleTest extends TestCase {
    
    public function testCanPerformUnitTest(): void{
        $this->assertTrue(true);
    }
    
    public function testAOutOfRange(): void
    {
        $t = new Triangle(201,1,1);
        // echo "testAOutOfRange Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("A out of range",$t->getType()['answer']);
    }
    
    public function testBOutOfRange(): void
    {
        $t = new Triangle(1,201,1);
        // echo "testBOutOfRange Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("B out of range",$t->getType()['answer']);
    }
    
    public function testCOutOfRange(): void
    {
        $t = new Triangle(1,1,201);
        // echo "testCOutOfRange Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("C out of range",$t->getType()['answer']);
    }
    
    public function testNotATriangleC():void{
        $t = new Triangle(1,2,5);
        // echo "testNotATriangleC Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Not a triangle",$t->getType()['answer']);
    }
    public function testNotATriangleB():void{
        $t = new Triangle(1,5,2);
        // echo "testNotATriangleB Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Not a triangle",$t->getType()['answer']);
    }
    public function testNotATriangleA():void{
        $t = new Triangle(5,2,1);
        // echo "testNotATriangleA Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Not a triangle",$t->getType()['answer']);
    }
    
    public function testIsEquilateral(): void{
        $t = new Triangle(3,3,3);
        // echo "testIsEquilateral Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Equilateral",$t->getType()['answer']);
    }
    
    public function testIsIsoScelesAB():void{
        $t = new Triangle(3,3,4);
        // echo "testIsIsoScelesAB Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Isosceles",$t->getType()['answer']);
    }
    
    public function testIsIsoScelesAC():void{
        $t = new Triangle(3,4,3);
        // echo "testIsIsoScelesAC Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Isosceles",$t->getType()['answer']);
    }
    
    public function testIsIsoScelesBC():void{
        $t = new Triangle(4,3,3);
        // echo "testIsIsoScelesBC Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Isosceles",$t->getType()['answer']);
    }
    public function testIsScalene(): void{
        $t = new Triangle(3,4,5);
        // echo "testIsScalene Path\n";
        // print_r($t->getType()['path']);
        $this->assertEquals("Scalene",$t->getType()['answer']);
    }
    
}