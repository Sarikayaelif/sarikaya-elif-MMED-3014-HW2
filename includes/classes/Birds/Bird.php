<?php

namespace Birds; 

class Bird extends \Animal { // \ is not optional here
    /**
     * @var string
     */
    protected $name = 'a bird';

     /**
     * A short message about eating this main dish.
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