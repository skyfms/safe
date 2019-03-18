<?php

namespace Safe;

use Safe\Exceptions\ReadlineException;

/**
 * This function adds a line to the command line history.
 *
 * @param $line The line to be added in the history.
 * @throws ReadlineException
 *
 */
function readline_add_history($line)
{

    $result = \readline_add_history($line);
    if ($result === false) {
        throw ReadlineException::createFromPhpError();
    }
}


/**
 * Sets up a readline callback interface then prints
 * prompt and immediately returns.
 * Calling this function twice without removing the previous
 * callback interface will automatically and conveniently overwrite the old
 * interface.
 *
 * The callback feature is useful when combined with
 * stream_select as it allows interleaving of IO and
 * user input, unlike readline.
 *
 *
 * Readline Callback Interface Example
 *
 * 10) {
 * $prompting = false;
 * readline_callback_handler_remove();
 * } else {
 * readline_callback_handler_install("[$c] Enter something: ", 'rl_callback');
 * }
 * }
 *
 * $c = 1;
 * $prompting = true;
 *
 * readline_callback_handler_install("[$c] Enter something: ", 'rl_callback');
 *
 * while ($prompting) {
 * $w = NULL;
 * $e = NULL;
 * $n = stream_select($r = array(STDIN), $w, $e, null);
 * if ($n && in_array(STDIN, $r)) {
 * // read a character, will call the callback when a newline is entered
 * readline_callback_read_char();
 * }
 * }
 *
 * echo "Prompting disabled. All done.\n";
 * ?>
 * ]]>
 *
 *
 *
 * @param $prompt The prompt message.
 * @param callable $callback The callback function takes one parameter; the
 * user input returned.
 * @throws ReadlineException
 *
 */
function readline_callback_handler_install($prompt, callable $callback)
{

    $result = \readline_callback_handler_install($prompt, $callback);
    if ($result === false) {
        throw ReadlineException::createFromPhpError();
    }
}


/**
 * This function clears the entire command line history.
 *
 * @throws ReadlineException
 *
 */
function readline_clear_history()
{

    $result = \readline_clear_history();
    if ($result === false) {
        throw ReadlineException::createFromPhpError();
    }
}


/**
 * This function registers a completion function. This is the same kind of
 * functionality you'd get if you hit your tab key while using Bash.
 *
 * @param callable $function You must supply the name of an existing function which accepts a
 * partial command line and returns an array of possible matches.
 * @throws ReadlineException
 *
 */
function readline_completion_function(callable $function)
{

    $result = \readline_completion_function($function);
    if ($result === false) {
        throw ReadlineException::createFromPhpError();
    }
}


/**
 * This function reads a command history from a file.
 *
 * @param $filename Path to the filename containing the command history.
 * @throws ReadlineException
 *
 */
function readline_read_history($filename = null)
{

    if ($filename !== null) {
        $result = \readline_read_history($filename);
    } else {
        $result = \readline_read_history();
    }
    if ($result === false) {
        throw ReadlineException::createFromPhpError();
    }
}


/**
 * This function writes the command history to a file.
 *
 * @param $filename Path to the saved file.
 * @throws ReadlineException
 *
 */
function readline_write_history($filename = null)
{

    if ($filename !== null) {
        $result = \readline_write_history($filename);
    } else {
        $result = \readline_write_history();
    }
    if ($result === false) {
        throw ReadlineException::createFromPhpError();
    }
}
