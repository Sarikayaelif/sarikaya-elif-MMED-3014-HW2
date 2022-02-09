<?php

namespace Birds;
use Traits\Fly;

class Parrot extends Bird 
{
    use Fly;

    protected $name = 'a parrot';

    public function eat(): string {
        $parentResult = parent::eat();
        return $parentResult . " For example, they eat seeds.";
    }

    public function drink(): string {
        $parentResult = parent::drink();
        return $parentResult . " For example, they drink juice.";
    }

    public function speak(): string {
        $parentResult = parent::speak();
        return $parentResult . " They can talk.";
    }
}