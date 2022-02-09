<?php

namespace Felines;
use Traits\Run;

class Lion extends Feline 
{
    use Run;
    
    protected $name = 'a lion';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat large hoofed animals.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They roar.";
    }

   
}