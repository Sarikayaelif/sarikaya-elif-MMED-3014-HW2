<?php

namespace Canines;
use Traits\Run;

class Wolf extends Canine 
{
    use Run;

     /**
     * @var string
     */
    protected $name = 'a wolf';

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat rabbits.";
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
        return $parentResult . " They howl.";
    }
}