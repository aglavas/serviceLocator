<?php
namespace Registry;

class Registry
{
    protected $_registryLocator;
    protected $_registryBackend;

    /**
     * Constructor
     */
    public function __construct(RegistryLocator $registryLocator)
    {
        $this->_registryLocator = $registryLocator;
    }


    public function getRegistryBackend()
    {
        if ($this->_registryBackend === null) {
            $this->_registryBackend = $this->_registryLocator->getArrayRegistry();
        }
        return $this->_registryBackend;
    }

    /**
     * Save the specified element to the registry
     */
    public function set($key, $value)
    {
        $this->getRegistryBackend()->set($key, $value);
        return $this;
    }

    /**
     * Get the specified element from the registry
     */
    public function get($key)
    {
        return $this->getRegistryBackend()->get($key);
    }

    /**
     * Clear the registry
     */
    public function clear()
    {
        $this->getRegistryBackend()->clear();
    }
}