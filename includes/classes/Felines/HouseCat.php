<?php

namespace Felines;
use Traits\Run;

class HouseCat extends Feline 
{
    use Run;

     /**
     * @var string
     */
    protected $name = 'a house cat';

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat cooked meat.";
    }

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink milk.";
    }

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They meow.";
    }

    /**
     * howFast function is used just for Feline sub-classes and its children classes.
     * @return string
     */
    public function howFast(): string 
    {
        return ' slower than the other felines.';
    }
}