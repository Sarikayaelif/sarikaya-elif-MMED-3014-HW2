<?php

namespace Canines;
use Traits\Run;

class Wolf extends Canine 
{
    use Run;

    protected $name = 'a wolf';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat rabbits.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They howl.";
    }
}