<?php

namespace Birds;
use Traits\Fly;

class Cardinal extends Bird 
{
    use Fly;

    protected $name = 'a cardinal';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat insects.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink water from puddles.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They can sing.";
    }
}