<?php

namespace Felines; 

class Feline extends \Animal // \ is not optional here
{ 
    /**
     * @var string
     */
    protected $name = 'a feline';

     /**
     * the second message of eat function, belongs second layer, sub-class.
     * @return string
     */
    public function eat(): string 
    {
        $parentResult = parent::eat();
        return $parentResult; 
    }

    /**
     * the second message of drink function, belongs second layer, sub-class.
     * @return string
     */
    public function drink(): string 
    {
        $parentResult = parent::drink();
        return $parentResult; 
    }

    /**
     * the second message of speak function, belongs second layer, sub-class.
     * @return string
     */
    public function speak(): string 
    {
        $parentResult = parent::speak();
        return $parentResult; 
    }

    /**
     * the second message of move function, belongs second layer, sub-class.
     * @return string
     */
    public function move(): string 
    {
        $parentResult = parent::move();
        $howFast = $this->howFast();
        return $parentResult . "They move " . $howFast;
    }   
     
    /**
     * howFast function is used just for Feline sub-classes and its children classes.
     * @return string
     */
    public function howFast(): string
    {
        return ' faster from many animals.';
    }
}