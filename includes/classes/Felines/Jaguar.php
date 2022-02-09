<?php

namespace Felines;
use Traits\Run;

class Jaguar extends Feline 
{
    use Run;

     /**
     * @var string
     */
    protected $name = 'a jaguar';

    /**
     * the third layer message of eat function, belongs children classes.
     * @return string
     */
    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat deers.";
    }

    /**
     * the third layer message of drink function, belongs children classes.
     * @return string
     */
    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water.";
    }

    /**
     * the third layer message of speak function, belongs children classes.
     * @return string
     */
    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They growl.";
    }
}