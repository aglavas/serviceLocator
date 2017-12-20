<?php
namespace Registry;

class RegistryLocator
{
    /**
     * Private constructor
     */
//    private function __construct(){}

    /**
     * Get the array registry
     */
    public function getArrayRegistry()
    {
        return new ArrayRegistry;
    }
}