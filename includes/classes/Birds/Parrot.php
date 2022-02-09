<?php

namespace Birds;
use Traits\Fly;

class Parrot extends Bird 
{
    use Fly; //declaring the traits

    /**
     * @var string
     */
    protected $name = 'a parrot';

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat seeds.";
    }

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink juice.";
    }

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They can talk.";
    }
}