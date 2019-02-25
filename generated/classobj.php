<?php

namespace Safe;

use Safe\Exceptions\ClassobjException;

/**
 * Creates an alias named alias
 * based on the user defined class original.
 * The aliased class is exactly the same as the original class.
 *
 * @param $original The original class.
 * @param $alias The alias name for the class.
 * @param bool $autoload Whether to autoload if the original class is not found.
 * @throws ClassobjException
 *
 */
function class_alias($original, $alias, $autoload = true)
{

    $result = \class_alias($original, $alias, $autoload);
    if ($result === false) {
        throw ClassobjException::createFromPhpError();
    }
}
