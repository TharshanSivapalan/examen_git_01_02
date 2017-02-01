<?php

namespace Lib;

class StringFormatter
{
    /**
     * @param string $prefix
     * @param string $string
     * @param bool $camelCase
     * @return string
     */
    public function prefix($prefix, $string, $camelCase = false)
    {
        if($camelCase)
        {
            return $this->toCamelCase($prefix, $string);
        }
        return $this->concatString($prefix, $string);
    }

    /**
     * @param string $suffix
     * @param string $string
     * @param bool $camelCase
     * @return string
     */
    public function suffix($suffix, $string, $camelCase = false)
    {
        if($camelCase)
        {
            return $this->toCamelCase($string, $suffix);
        }
        return $this->concatString($string, $suffix);
    }

    /**
     * @param string $firstString
     * @param string $secondString
     * @return string
     */
    public function toCamelCase($firstString, $secondString)
    {
        return $this->concatString(strtolower($firstString), ucfirst($secondString));
    }

    /**
     * @param string $firstString
     * @param string $secondString
     * @return string
     */
    public function concatString($firstString, $secondString)
    {
        return $firstString . $secondString;
    }
}