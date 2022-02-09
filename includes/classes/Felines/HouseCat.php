<?php

namespace Felines;
use Traits\Run;

class HouseCat extends Feline 
{
    use Run;

    protected $name = 'a house cat';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat cooked meat.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink milk.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They meow.";
    }
}