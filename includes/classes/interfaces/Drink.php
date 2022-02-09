<?php
namespace Interfaces;

interface Drink
{
    /**
     * An edible thing must be able to be eaten.
     * 
     * @return string
     */
  public function drink(): string;

   
}