<?php

namespace Safe;

use Safe\Exceptions\VarException;

/**
 * Set the type of variable var to
 * type.
 *
 * @param mixed $var The variable being converted.
 * @param $type Possibles values of type are:
 *
 *
 *
 * "boolean" or "bool"
 *
 *
 *
 *
 * "integer" or "int"
 *
 *
 *
 *
 * "float" or "double"
 *
 *
 *
 *
 * "string"
 *
 *
 *
 *
 * "array"
 *
 *
 *
 *
 * "object"
 *
 *
 *
 *
 * "null"
 *
 *
 *
 * @throws VarException
 *
 */
function settype(&$var, $type)
{

    $result = \settype($var, $type);
    if ($result === false) {
        throw VarException::createFromPhpError();
    }
}
