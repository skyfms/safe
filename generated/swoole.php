<?php

namespace Safe;

use Safe\Exceptions\SwooleException;

/**
 *
 *
 * @param $filename The filename being written.
 * @param $content The content writing to the file.
 * @param int $offset The offset.
 * @param callable $callback
 * @throws SwooleException
 *
 */
function swoole_async_write($filename, $content, integer $offset = null, callable $callback = null)
{

    if ($callback !== null) {
        $result = \swoole_async_write($filename, $content, $offset, $callback);
    } elseif ($offset !== null) {
        $result = \swoole_async_write($filename, $content, $offset);
    } else {
        $result = \swoole_async_write($filename, $content);
    }
    if ($result === false) {
        throw SwooleException::createFromPhpError();
    }
}


/**
 *
 *
 * @param $filename The filename being written.
 * @param $content The content writing to the file.
 * @param $callback
 * @param int $flags
 * @throws SwooleException
 *
 */
function swoole_async_writefile($filename, $content, callable $callback = null, $flags = 0)
{

    if ($flags !== 0) {
        $result = \swoole_async_writefile($filename, $content, $callback, $flags);
    } elseif ($callback !== null) {
        $result = \swoole_async_writefile($filename, $content, $callback);
    } else {
        $result = \swoole_async_writefile($filename, $content);
    }
    if ($result === false) {
        throw SwooleException::createFromPhpError();
    }
}


/**
 *
 *
 * @param callable $callback
 * @throws SwooleException
 *
 */
function swoole_event_defer(callable $callback)
{

    $result = \swoole_event_defer($callback);
    if ($result === false) {
        throw SwooleException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $fd
 * @throws SwooleException
 *
 */
function swoole_event_del($fd)
{

    $result = \swoole_event_del($fd);
    if ($result === false) {
        throw SwooleException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $fd
 * @param $data
 * @throws SwooleException
 *
 */
function swoole_event_write($fd, $data)
{

    $result = \swoole_event_write($fd, $data);
    if ($result === false) {
        throw SwooleException::createFromPhpError();
    }
}
