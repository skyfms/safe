<?php

namespace Safe;

use Safe\Exceptions\PspellException;

/**
 *
 *
 * @param int $dictionary_link
 * @param $word The added word.
 * @throws PspellException
 *
 */
function pspell_add_to_personal($dictionary_link, $word)
{

    $result = \pspell_add_to_personal($dictionary_link, $word);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $dictionary_link
 * @param $word The added word.
 * @throws PspellException
 *
 */
function pspell_add_to_session($dictionary_link, $word)
{

    $result = \pspell_add_to_session($dictionary_link, $word);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $dictionary_link
 * @throws PspellException
 *
 */
function pspell_clear_session($dictionary_link)
{

    $result = \pspell_clear_session($dictionary_link);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 * Create a config used to open a dictionary.
 *
 * pspell_config_create has a very similar syntax to
 * pspell_new. In fact, using
 * pspell_config_create immediately followed by
 * pspell_new_config will produce the exact same result.
 * However, after creating a new config, you can also use
 * pspell_config_* functions before calling
 * pspell_new_config to take advantage of some
 * advanced functionality.
 *
 * For more information and examples, check out inline manual pspell
 * website:http://aspell.net/.
 *
 * @param $language The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * @param $spelling The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * @param $jargon The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * @param $encoding The encoding parameter is the encoding that words are expected to
 * be in.  Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * @return int Retuns a pspell config identifier.
 * @throws PspellException
 *
 */
function pspell_config_create($language, $spelling = null, $jargon = null, $encoding = null)
{

    if ($encoding !== null) {
        $result = \pspell_config_create($language, $spelling, $jargon, $encoding);
    } elseif ($jargon !== null) {
        $result = \pspell_config_create($language, $spelling, $jargon);
    } elseif ($spelling !== null) {
        $result = \pspell_config_create($language, $spelling);
    } else {
        $result = \pspell_config_create($language);
    }
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
    return $result;
}


/**
 * This function is
 * currently not documented; only its argument list is available.
 *
 *
 * @param int $conf
 * @param $directory
 * @throws PspellException
 *
 */
function pspell_config_data_dir($conf, $directory)
{

    $result = \pspell_config_data_dir($conf, $directory);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 * This function is
 * currently not documented; only its argument list is available.
 *
 *
 * @param int $conf
 * @param $directory
 * @throws PspellException
 *
 */
function pspell_config_dict_dir($conf, $directory)
{

    $result = \pspell_config_dict_dir($conf, $directory);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $dictionary_link
 * @param int $n Words less than n characters will be skipped.
 * @throws PspellException
 *
 */
function pspell_config_ignore($dictionary_link, $n)
{

    $result = \pspell_config_ignore($dictionary_link, $n);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $dictionary_link
 * @param int $mode The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 *
 *
 *
 * PSPELL_FAST - Fast mode (least number of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_NORMAL - Normal mode (more suggestions)
 *
 *
 *
 *
 * PSPELL_BAD_SPELLERS - Slow mode (a lot of
 * suggestions)
 *
 *
 *
 * @throws PspellException
 *
 */
function pspell_config_mode($dictionary_link, $mode)
{

    $result = \pspell_config_mode($dictionary_link, $mode);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 * Set a file that contains personal wordlist. The personal wordlist will be
 * loaded and used in addition to the standard one after you call
 * pspell_new_config. The file is also the file where
 * pspell_save_wordlist will save personal wordlist to.
 *
 * pspell_config_personal should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $dictionary_link
 * @param $file The personal wordlist. If the file does not exist, it will be created.
 * The file should be writable by whoever PHP runs as (e.g. nobody).
 * @throws PspellException
 *
 */
function pspell_config_personal($dictionary_link, $file)
{

    $result = \pspell_config_personal($dictionary_link, $file);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 * Set a file that contains replacement pairs.
 *
 * The replacement pairs improve the quality of the spellchecker. When a word
 * is misspelled, and a proper suggestion was not found in the list,
 * pspell_store_replacement can be used to store a
 * replacement pair and then pspell_save_wordlist to
 * save the wordlist along with the replacement pairs.
 *
 * pspell_config_repl should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $dictionary_link
 * @param $file The file should be writable by whoever PHP runs as (e.g. nobody).
 * @throws PspellException
 *
 */
function pspell_config_repl($dictionary_link, $file)
{

    $result = \pspell_config_repl($dictionary_link, $file);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 * This function determines whether run-together words will be treated as
 * legal compounds.  That is, "thecat" will be a legal compound, although
 * there should be a space between the two words. Changing this setting only
 * affects the results returned by pspell_check;
 * pspell_suggest will still return suggestions.
 *
 * pspell_config_runtogether should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $dictionary_link
 * @param bool $flag TRUE if run-together words should be treated as legal compounds,
 * FALSE otherwise.
 * @throws PspellException
 *
 */
function pspell_config_runtogether($dictionary_link, $flag)
{

    $result = \pspell_config_runtogether($dictionary_link, $flag);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 * pspell_config_save_repl determines whether
 * pspell_save_wordlist will save the replacement pairs
 * along with the wordlist. Usually there is no need to use this function
 * because if pspell_config_repl is used, the
 * replacement pairs will be saved by
 * pspell_save_wordlist anyway, and if it is not,
 * the replacement pairs will not be saved.
 *
 * pspell_config_save_repl should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $dictionary_link
 * @param bool $flag TRUE if replacement pairs should be saved, FALSE otherwise.
 * @throws PspellException
 *
 */
function pspell_config_save_repl($dictionary_link, $flag)
{

    $result = \pspell_config_save_repl($dictionary_link, $flag);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $config The config parameter is the one returned by
 * pspell_config_create when the config was created.
 * @return int Returns a dictionary link identifier on success.
 * @throws PspellException
 *
 */
function pspell_new_config($config)
{

    $result = \pspell_new_config($config);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
    return $result;
}


/**
 * pspell_new opens up a new dictionary and
 * returns the dictionary link identifier for use in other pspell
 * functions.
 *
 * For more information and examples, check out inline manual pspell
 * website:http://aspell.net/.
 *
 * @param $language The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * @param $spelling The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * @param $jargon The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * @param $encoding The encoding parameter is the encoding that words are expected to
 * be in.  Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * @param int $mode The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 *
 *
 *
 * PSPELL_FAST - Fast mode (least number of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_NORMAL - Normal mode (more suggestions)
 *
 *
 *
 *
 * PSPELL_BAD_SPELLERS - Slow mode (a lot of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_RUN_TOGETHER - Consider run-together words
 * as legal compounds.  That is, "thecat" will be a legal compound,
 * although there should be a space between the two words. Changing this
 * setting only affects the results returned by
 * pspell_check; pspell_suggest
 * will still return suggestions.
 *
 *
 *
 * Mode is a bitmask constructed from different constants listed above.
 * However, PSPELL_FAST,
 * PSPELL_NORMAL and
 * PSPELL_BAD_SPELLERS are mutually exclusive, so you
 * should select only one of them.
 * @return int Returns the dictionary link identifier on success.
 * @throws PspellException
 *
 */
function pspell_new($language, $spelling = null, $jargon = null, $encoding = null, $mode = 0)
{

    if ($mode !== 0) {
        $result = \pspell_new($language, $spelling, $jargon, $encoding, $mode);
    } elseif ($encoding !== null) {
        $result = \pspell_new($language, $spelling, $jargon, $encoding);
    } elseif ($jargon !== null) {
        $result = \pspell_new($language, $spelling, $jargon);
    } elseif ($spelling !== null) {
        $result = \pspell_new($language, $spelling);
    } else {
        $result = \pspell_new($language);
    }
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param int $dictionary_link A dictionary link identifier opened with
 * pspell_new_personal.
 * @throws PspellException
 *
 */
function pspell_save_wordlist($dictionary_link)
{

    $result = \pspell_save_wordlist($dictionary_link);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $dictionary_link A dictionary link identifier, opened with
 * pspell_new_personal
 * @param $misspelled The misspelled word.
 * @param $correct The fixed spelling for the misspelled word.
 * @throws PspellException
 *
 */
function pspell_store_replacement($dictionary_link, $misspelled, $correct)
{

    $result = \pspell_store_replacement($dictionary_link, $misspelled, $correct);
    if ($result === false) {
        throw PspellException::createFromPhpError();
    }
}
