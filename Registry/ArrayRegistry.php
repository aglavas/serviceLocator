<?php

namespace Registry;

class ArrayRegistry implements Registrable
{
    protected $_data = array();

    /**
     * Save the specified value to the array registry
     */
    public function set($key, $value)
    {
        $this->_data[strtolower($key)] = $value;
    }

    /**
     * Get the specified value from the array registry
     */
    public function get($key)
    {
        $key = strtolower($key);
        return isset($this->_data[$key]) ?
            $this->_data[$key] :
            null;
    }

    /**
     * Clear the array registry
     */
    public function clear()
    {
        $this->_data = array();
    }
}