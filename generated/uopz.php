<?php

namespace Safe;

use Safe\Exceptions\UopzException;

/**
 * Makes class extend parent
 *
 * @param $class The name of the class to extend
 * @param $parent The name of the class to inherit
 * @throws UopzException
 *
 */
function uopz_extend($class, $parent)
{

    $result = \uopz_extend($class, $parent);
    if ($result === false) {
        throw UopzException::createFromPhpError();
    }
}


/**
 * Makes class implement interface
 *
 * @param $class
 * @param $interface
 * @throws UopzException
 *
 */
function uopz_implement($class, $interface)
{

    $result = \uopz_implement($class, $interface);
    if ($result === false) {
        throw UopzException::createFromPhpError();
    }
}
