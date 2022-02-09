<?php

namespace Canines;
use Traits\Run;

class Dog extends Canine 
{
    use Run;

     /**
     * @var string
     */
    protected $name = 'a dog';

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat dog food.";
    }

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water.";
    }

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They bark.";
    }
}