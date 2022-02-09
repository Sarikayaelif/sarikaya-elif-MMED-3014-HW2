<?php

namespace Canines;

//use Animal; 

class Canine extends \Animal
{
    /**
     * @var string
     */
    protected $name = 'a canine';


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
}