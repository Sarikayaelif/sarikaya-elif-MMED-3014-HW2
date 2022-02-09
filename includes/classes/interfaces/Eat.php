<?php
namespace Interfaces;

interface Eat 
{
    /**
     * An edible thing must be able to be eaten.
     * 
     * @return string
     */
  public function eat(): string;

   
}