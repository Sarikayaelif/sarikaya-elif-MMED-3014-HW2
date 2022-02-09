<?php

namespace Canines;
use Traits\Run;

class Dog extends Canine 
{
    use Run;

    protected $name = 'a dog';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat dog food.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They bark.";
    }
}