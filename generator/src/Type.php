<?php


namespace Safe;

class Type
{
    /**
     * Returns true if the type passed in parameter is a class, false if it is scalar or resource
     *
     * @param $type
     * @return bool
     */
    private static function isClass($type)
    {
        if ($type === '') {
            throw new EmptyTypeException('Empty type passed');
        }
        if ($type === 'stdClass') {
            return true;
        }
        // Classes start with uppercase letters. Otherwise, it's most likely a scalar.
        if ($type[0] === strtoupper($type[0])) {
            return true;
        }
        return false;
    }

    /**
     * Put classes in the root namespace
     *
     * @param $type
     * @return string
     */
    public static function toRootNamespace($type)
    {
        if (self::isClass($type)) {
            return '\\'.$type;
        }
        return $type;
    }
}
