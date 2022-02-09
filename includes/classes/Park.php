<?php

use Canines\Canine;
use Felines\Feline;
use Birds\Bird;

class Park {

    /**
     * @var Canine
     */
    protected $canine;

    /**
     * @var Feline
     */
    protected $feline;

    /**
     * @var Bird
     */
    protected $bird;

    /**
     * @param Canine $canine
     * @param Feline $feline
     * @param Bird $bird
     */

    public function __construct(Canine $canine, Feline $feline, Bird $bird) 
    {
        $this->canine = $canine;
        $this->feline = $feline;
        $this->bird = $bird;
    }

}