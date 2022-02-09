<?php

namespace Birds;
use Traits\Fly;

class Cardinal extends Bird 
{
    use Fly; //declaring the traits

     /**
     * @var string
     */
    protected $name = 'a cardinal';

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat insects.";
    }

    /**
     * the third layer message of drink function, belongs children classes.
     * @return string
     */
    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water from puddles.";
    }

    /**
     * the third layer message of speak function, belongs children classes.
     * @return string
     */
    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They can sing.";
    }
}