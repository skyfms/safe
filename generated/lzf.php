<?php

namespace Safe;

use Safe\Exceptions\LzfException;

/**
 * lzf_compress compresses the given
 * data string using LZF encoding.
 *
 * @param string $data The string to compress.
 * @return string Returns the compressed data.
 * @throws LzfException
 *
 */
function lzf_compress($data)
{

    $result = \lzf_compress($data);
    if ($result === false) {
        throw LzfException::createFromPhpError();
    }
    return $result;
}


/**
 * lzf_compress decompresses the given
 * data string containing lzf encoded data.
 *
 * @param string $data The compressed string.
 * @return string Returns the decompressed data.
 * @throws LzfException
 *
 */
function lzf_decompress($data)
{

    $result = \lzf_decompress($data);
    if ($result === false) {
        throw LzfException::createFromPhpError();
    }
    return $result;
}
