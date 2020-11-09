<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Bike;

class BikeTest extends TestCase
{

    /** @test */
    public function checkIfBikeColumnsAreCorrect()
    {
        $bike = new Bike;
        $expected = [
            'descricao',
            'modelo',
            'preco',
            'vendida',
            'data_cadastro'
        ];
        $arrayCompared = array_diff($expected,$bike->getFillable());
        $this->assertEquals(0, count($arrayCompared));
    }

    /** @test */
    public function checkIfOneBikeColumIsNotCorrect()
    {
        $bike = new Bike;
        $expected = [
            'descrixao',
            'modelo',
            'preco',
            'vendida',
            'data_cadastro'
        ];
        $arrayCompared = array_diff($expected,$bike->getFillable());
        $this->assertEquals(1, count($arrayCompared));
    }

    /** @test */
    public function checkIfDescricaoIsString()
    {
        $bike = new Bike;
        $bike->descricao = 'descricao';
        $this->assertEquals(true,is_string($bike->descricao));
    }

    /** @test */
    public function checkIfDescricaoIsNotString()
    {
        $bike = new Bike;
        $bike->descricao = 2;
        $this->assertEquals(false,is_string($bike->descricao));
    }

    /** @test */
    public function checkIfModeloIsString()
    {
        $bike = new Bike;
        $bike->modelo = 'modelo';
        $this->assertEquals(true,is_string($bike->modelo));
    }

    /** @test */
    public function checkIfModeloIsNotString()
    {
        $bike = new Bike;
        $bike->modelo = 1;
        $this->assertEquals(false,is_string($bike->modelo));
    }

    /** @test */
    public function checkIfPrecoIsDouble()
    {
        $bike = new Bike;
        $bike->preco = 20.2;
        $this->assertEquals(true,is_double($bike->preco));
    }

    /** @test */
    public function checkIfPrecoIsNotDouble()
    {
        $bike = new Bike;
        $bike->preco = 20;
        $this->assertEquals(false,is_double($bike->preco));
    }

    /** @test */
    public function checkIfVendidaIsBoolean()
    {
        $bike = new Bike;
        $bike->vendida = true;
        $this->assertEquals(true,is_bool($bike->vendida));
    }

    /** @test */
    public function checkIfVendidaIsNotBoolean()
    {
        $bike = new Bike;
        $bike->vendida = 0;
        $this->assertEquals(false,is_bool($bike->vendida));
    }

}
