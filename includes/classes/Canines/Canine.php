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
     * A short message about chooseing this canine.
     * @return string
     */
    public function eat(): string 
    {
        $parentResult = parent::eat();
        return $parentResult; 
    }

    public function drink(): string 
    {
        $parentResult = parent::drink();
        return $parentResult; 
    }

    public function speak(): string 
    {
        $parentResult = parent::speak();
        return $parentResult; 
    }
}