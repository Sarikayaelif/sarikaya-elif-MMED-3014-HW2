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
     * the first message of eat function about the animal.
     * @return string
     */
    public function eat(): string 
    {
        return "If you choose " . $this->name . ", I can tell you what " . $this->name . " eats. ";
    }

    /**
     * the first message of drink function about the animal.
     * @return string
     */
    public function drink(): string 
    {
        return  "Then, I can tell you what " . $this->name . " drinks. ";
    }

    /**
     * the first message of speak function about the animal.
     * @return string
     */
    public function speak(): string 
    {
        return "After that, I can tell you which sound " . $this->name . " makes. ";
    }

    /**
     * the first message of move function about the animal.
     * @return string
     */
    public function move(): string 
    {
        return "Also, do you know how fast " . $this->name . " moves. ";
    }
}
