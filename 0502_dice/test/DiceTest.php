<?php

require_once('Dice.php');

class DiceTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function 現在のサイコロのtopの数字を返す()
	{
		$this->assertEquals(1, (new Dice())->get_top_number());
	}
    /** @test */
    public function サイコロの目が更新されること()
    {
        $dice = new Dice();
        $new_number = array(
            'top' => 100,
            'bottom' => 101,
            'north' => 102,
            'east' => 103,
            'west' => 104,
            'south' => 105
        );
        $dice->update($new_number);

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(100, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(101, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(102, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(103, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(104, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(105, $property->getValue($dice)['south'], 'south');
    }
    /** @test */
    public function サイコロにNorthの操作をするとサイコロが北方向へ回転する()
    {
        $dice = new Dice();
        $dice->north();

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(2, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(5, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(1, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(3, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(4, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(6, $property->getValue($dice)['south'], 'south');
    }

    /** @test */
    public function サイコロにEastの操作をするとサイコロが東方向へ回転する()
    {
        $dice = new Dice();
        $dice->east();

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(4, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(3, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(5, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(1, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(6, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(2, $property->getValue($dice)['south'], 'south');
    }

    /** @test */
    public function サイコロにwestの操作をするとサイコロが西方向へ回転する()
    {
        $dice = new Dice();
        $dice->west();

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(3, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(4, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(5, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(6, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(1, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(2, $property->getValue($dice)['south'], 'south');
    }

    /** @test */
    public function サイコロにsouthの操作をするとサイコロが南方向へ回転する()
    {
        $dice = new Dice();
        $dice->south();

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(5, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(2, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(6, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(3, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(4, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(1, $property->getValue($dice)['south'], 'south');
    }

    /** @test */
    public function サイコロにrightの操作をするとサイコロが右周りへ回転する()
    {
        $dice = new Dice();
        $dice->right();

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(1, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(6, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(4, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(5, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(2, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(3, $property->getValue($dice)['south'], 'south');
    }

    /** @test */
    public function サイコロにleftの操作をするとサイコロが左周りへ回転する()
    {
        $dice = new Dice();
        $dice->left();

        $reflectionClass = new ReflectionClass(get_class($dice));
        $property = $reflectionClass->getProperty('now_number');
        $property->setAccessible(true);

        $this->assertEquals(1, $property->getValue($dice)['top'], 'top');
        $this->assertEquals(6, $property->getValue($dice)['bottom'], 'bottom');
        $this->assertEquals(3, $property->getValue($dice)['north'], 'north');
        $this->assertEquals(2, $property->getValue($dice)['east'], 'east');
        $this->assertEquals(5, $property->getValue($dice)['west'], 'west');
        $this->assertEquals(4, $property->getValue($dice)['south'], 'south');
    }
}
