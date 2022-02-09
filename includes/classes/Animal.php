<?php 

use Interfaces\Eat;
use Interfaces\Drink;
use Interfaces\Speak;
use Interfaces\Move;

class Animal implements Eat, Drink, Speak, Move
{
    /**
     * @var string
    */
    protected $name = 'an animal';


    /**
     * A short message about choosing the animal.
     * @return string
     */
    public function eat(): string 
    {
        return "If you choose " . $this->name . ", I can tell you what " . $this->name . " eats. ";
    }

    public function drink(): string 
    {
        return  "Then, I can tell you what " . $this->name . " drinks. ";
    }

    public function speak(): string 
    {
        return "After that, I can tell you which sound " . $this->name . " makes. ";
    }

    public function move(): string 
    {
        return "Also, do you know how fast " . $this->name . " moves. ";
    }
}
