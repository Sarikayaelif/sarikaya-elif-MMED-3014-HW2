<?php

namespace Felines;
use Traits\Run;

class Jaguar extends Feline 
{
    use Run;

    protected $name = 'a jaguar';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat deers.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They growl.";
    }
}