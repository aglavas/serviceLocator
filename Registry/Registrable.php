<?php

namespace Registry;

interface Registrable
{
    public function set($key, $value);

    public function get($key);

    public function clear();
}