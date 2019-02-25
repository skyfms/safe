<?php

namespace Safe;

use Safe\Exceptions\RrdException;

/**
 * Creates the rdd database file.
 *
 * @param $filename Filename for newly created rrd file.
 * @param array $options Options for rrd create - list of strings. See man page of rrd create
 * for whole list of options.
 * @throws RrdException
 *
 */
function rrd_create($filename, array $options)
{

    $result = \rrd_create($filename, $options);
    if ($result === false) {
        throw RrdException::createFromPhpError();
    }
}
