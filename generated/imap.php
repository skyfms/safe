<?php

namespace Safe;

use Safe\Exceptions\ImapException;

/**
 * Appends a string message to the specified mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @param $message The message to be append, as a string
 *
 * When talking to the Cyrus IMAP server, you must use "\r\n" as
 * your end-of-line terminator instead of "\n" or the operation will
 * fail
 * @param $options If provided, the options will also be written
 * to the mailbox
 * @param $internal_date If this parameter is set, it will set the INTERNALDATE on the appended message.  The parameter should be a date string that conforms to the rfc2060 specifications for a date_time value.
 * @throws ImapException
 *
 */
function imap_append($imap_stream, $mailbox, $message, $options = null, $internal_date = null)
{

    $result = \imap_append($imap_stream, $mailbox, $message, $options, $internal_date);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Checks information about the current mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @return object Returns the information in an object with following properties:
 *
 *
 *
 * Date - current system time formatted according to RFC2822
 *
 *
 *
 *
 * Driver - protocol used to access this mailbox:
 * POP3, IMAP, NNTP
 *
 *
 *
 *
 * Mailbox - the mailbox name
 *
 *
 *
 *
 * Nmsgs - number of messages in the mailbox
 *
 *
 *
 *
 * Recent - number of recent messages in the mailbox
 *
 *
 *
 *
 * Returns FALSE on failure.
 * @throws ImapException
 *
 */
function imap_check($imap_stream): object
{

    $result = \imap_check($imap_stream);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * This function causes a store to delete the specified
 * flag to the flags set for the
 * messages in the specified sequence.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $sequence A sequence of message numbers. You can enumerate desired messages
 * with the X,Y syntax, or retrieve all messages
 * within an interval with the X:Y syntax
 * @param $flag The flags which you can unset are "\\Seen", "\\Answered", "\\Flagged",
 * "\\Deleted", and "\\Draft" (as defined by RFC2060)
 * @param int $options options are a bit mask and may contain
 * the single option:
 *
 *
 *
 * ST_UID - The sequence argument contains UIDs
 * instead of sequence numbers
 *
 *
 *
 * @throws ImapException
 *
 */
function imap_clearflag_full($imap_stream, $sequence, $flag, $options = 0)
{

    $result = \imap_clearflag_full($imap_stream, $sequence, $flag, $options);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Closes the imap stream.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param int $flag If set to CL_EXPUNGE, the function will silently
 * expunge the mailbox before closing, removing all messages marked for
 * deletion. You can achieve the same thing by using
 * imap_expunge
 * @throws ImapException
 *
 */
function imap_close($imap_stream, $flag = 0)
{

    $result = \imap_close($imap_stream, $flag);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Creates a new mailbox specified by mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $mailbox The mailbox name, see imap_open for more
 * information. Names containing international characters should be
 * encoded by imap_utf7_encode
 * @throws ImapException
 *
 */
function imap_createmailbox($imap_stream, $mailbox)
{

    $result = \imap_createmailbox($imap_stream, $mailbox);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Deletes the specified mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @throws ImapException
 *
 */
function imap_deletemailbox($imap_stream, $mailbox)
{

    $result = \imap_deletemailbox($imap_stream, $mailbox);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Purges the cache of entries of a specific type.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param int $caches Specifies the cache to purge. It may one or a combination
 * of the following constants:
 * IMAP_GC_ELT (message cache elements),
 * IMAP_GC_ENV (envelope and bodies),
 * IMAP_GC_TEXTS (texts).
 * @throws ImapException
 *
 */
function imap_gc($imap_stream, $caches)
{

    $result = \imap_gc($imap_stream, $caches);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Gets information about the given message number by reading its headers.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param int $msg_number The message number
 * @param int $fromlength Number of characters for the fetchfrom property.
 * Must be greater than or equal to zero.
 * @param int $subjectlength Number of characters for the fetchsubject property
 * Must be greater than or equal to zero.
 * @param $defaulthost
 * @return object Returns FALSE on error or, if successful, the information in an object with following properties:
 *
 *
 *
 * toaddress - full to: line, up to 1024 characters
 *
 *
 *
 *
 * to - an array of objects from the To: line, with the following
 * properties: personal, adl,
 * mailbox, and host
 *
 *
 *
 *
 * fromaddress - full from: line, up to 1024 characters
 *
 *
 *
 *
 * from - an array of objects from the From: line, with the following
 * properties: personal, adl,
 * mailbox, and host
 *
 *
 *
 *
 * ccaddress - full cc: line, up to 1024 characters
 *
 *
 *
 *
 * cc - an array of objects from the Cc: line, with the following
 * properties: personal, adl,
 * mailbox, and host
 *
 *
 *
 *
 * bccaddress - full bcc: line, up to 1024 characters
 *
 *
 *
 *
 * bcc - an array of objects from the Bcc: line, with the following
 * properties: personal, adl,
 * mailbox, and host
 *
 *
 *
 *
 * reply_toaddress - full Reply-To: line, up to 1024 characters
 *
 *
 *
 *
 * reply_to - an array of objects from the Reply-To: line, with the following
 * properties: personal, adl,
 * mailbox, and host
 *
 *
 *
 *
 * senderaddress - full sender: line, up to 1024 characters
 *
 *
 *
 *
 * sender - an array of objects from the Sender: line, with the following
 * properties: personal, adl,
 * mailbox, and host
 *
 *
 *
 *
 * return_pathaddress - full Return-Path: line, up to 1024 characters
 *
 *
 *
 *
 * return_path - an array of objects from the Return-Path: line, with the
 * following properties: personal,
 * adl, mailbox, and
 * host
 *
 *
 *
 *
 * remail -
 *
 *
 *
 *
 * date - The message date as found in its headers
 *
 *
 *
 *
 * Date - Same as date
 *
 *
 *
 *
 * subject - The message subject
 *
 *
 *
 *
 * Subject - Same as subject
 *
 *
 *
 *
 * in_reply_to -
 *
 *
 *
 *
 * message_id -
 *
 *
 *
 *
 * newsgroups -
 *
 *
 *
 *
 * followup_to -
 *
 *
 *
 *
 * references -
 *
 *
 *
 *
 * Recent - R if recent and seen, N
 * if recent and not seen, ' ' if not recent.
 *
 *
 *
 *
 * Unseen - U if not seen AND not recent, ' ' if seen
 * OR not seen and recent
 *
 *
 *
 *
 * Flagged - F if flagged, ' ' if not flagged
 *
 *
 *
 *
 * Answered - A if answered, ' ' if unanswered
 *
 *
 *
 *
 * Deleted - D if deleted, ' ' if not deleted
 *
 *
 *
 *
 * Draft - X if draft, ' ' if not draft
 *
 *
 *
 *
 * Msgno - The message number
 *
 *
 *
 *
 * MailDate -
 *
 *
 *
 *
 * Size - The message size
 *
 *
 *
 *
 * udate - mail message date in Unix time
 *
 *
 *
 *
 * fetchfrom - from line formatted to fit fromlength
 * characters
 *
 *
 *
 *
 * fetchsubject - subject line formatted to fit
 * subjectlength characters
 *
 *
 *
 * @throws ImapException
 *
 */
function imap_headerinfo($imap_stream, $msg_number, $fromlength = 0, $subjectlength = 0, $defaulthost = null): object
{

    $result = \imap_headerinfo($imap_stream, $msg_number, $fromlength, $subjectlength, $defaulthost);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * Copies mail messages specified by msglist
 * to specified mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $msglist msglist is a range not just message
 * numbers (as described in RFC2060).
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @param int $options options is a bitmask of one or more of
 *
 *
 *
 * CP_UID - the sequence numbers contain UIDS
 *
 *
 *
 *
 * CP_MOVE - Delete the messages from
 * the current mailbox after copying
 *
 *
 *
 * @throws ImapException
 *
 */
function imap_mail_copy($imap_stream, $msglist, $mailbox, $options = 0)
{

    $result = \imap_mail_copy($imap_stream, $msglist, $mailbox, $options);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Moves mail messages specified by msglist to the
 * specified mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $msglist msglist is a range not just message numbers
 * (as described in RFC2060).
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @param int $options options is a bitmask and may contain the single option:
 *
 *
 *
 * CP_UID - the sequence numbers contain UIDS
 *
 *
 *
 * @throws ImapException
 *
 */
function imap_mail_move($imap_stream, $msglist, $mailbox, $options = 0)
{

    $result = \imap_mail_move($imap_stream, $msglist, $mailbox, $options);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * This function allows sending of emails with correct handling of
 * Cc and Bcc receivers.
 *
 * The parameters to, cc
 * and bcc are all strings and are all parsed
 * as RFC822 address lists.
 *
 * @param $to The receiver
 * @param $subject The mail subject
 * @param $message The mail body, see imap_mail_compose
 * @param $additional_headers As string with additional headers to be set on the mail
 * @param $cc
 * @param $bcc The receivers specified in bcc will get the
 * mail, but are excluded from the headers.
 * @param $rpath Use this parameter to specify return path upon mail delivery failure.
 * This is useful when using PHP as a mail client for multiple users.
 * @throws ImapException
 *
 */
function imap_mail($to, $subject, $message, $additional_headers = null, $cc = null, $bcc = null, $rpath = null)
{

    $result = \imap_mail($to, $subject, $message, $additional_headers, $cc, $bcc, $rpath);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Checks the current mailbox status on the server. It is similar to
 * imap_status, but will additionally sum up the size of
 * all messages in the mailbox, which will take some additional time to
 * execute.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @return object Returns the information in an object with following properties:
 *
 * Mailbox properties
 *
 *
 *
 * Date
 * date of last change (current datetime)
 *
 *
 * Driver
 * driver
 *
 *
 * Mailbox
 * name of the mailbox
 *
 *
 * Nmsgs
 * number of messages
 *
 *
 * Recent
 * number of recent messages
 *
 *
 * Unread
 * number of unread messages
 *
 *
 * Deleted
 * number of deleted messages
 *
 *
 * Size
 * mailbox size
 *
 *
 *
 *
 *
 * Returns FALSE on failure.
 * @throws ImapException
 *
 */
function imap_mailboxmsginfo($imap_stream): object
{

    $result = \imap_mailboxmsginfo($imap_stream);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * Decode a modified UTF-7 (as specified in RFC 2060, section 5.1.3) string to UTF-8.
 *
 * @param string $in A string encoded in modified UTF-7.
 * @return string Returns in converted to UTF-8.
 * @throws ImapException
 *
 */
function imap_mutf7_to_utf8($in)
{

    $result = \imap_mutf7_to_utf8($in);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the number of messages in the current mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @return int Return the number of messages in the current mailbox, as an integer.
 * @throws ImapException
 *
 */
function imap_num_msg($imap_stream)
{

    $result = \imap_num_msg($imap_stream);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * Opens an IMAP stream to a mailbox.
 *
 * This function can also be used to open streams to POP3 and
 * NNTP servers, but some functions and features are only
 * available on IMAP servers.
 *
 * @param $mailbox A mailbox name consists of a server and a mailbox path on this server.
 * The special name INBOX stands for the current users
 * personal mailbox. Mailbox names that contain international characters
 * besides those in the printable ASCII space have to be encoded with
 * imap_utf7_encode.
 *
 * The server part, which is enclosed in '{' and '}', consists of the servers
 * name or ip address, an optional port (prefixed by ':'), and an optional
 * protocol specification (prefixed by '/').
 *
 * The server part is mandatory in all mailbox
 * parameters.
 *
 * All names which start with { are remote names, and are
 * in the form "{" remote_system_name [":" port] [flags] "}"
 * [mailbox_name] where:
 *
 *
 *
 * remote_system_name - Internet domain name or
 * bracketed IP address of server.
 *
 *
 *
 *
 * port - optional TCP port number, default is the
 * default port for that service
 *
 *
 *
 *
 * flags - optional flags, see following table.
 *
 *
 *
 *
 * mailbox_name - remote mailbox name, default is INBOX
 *
 *
 *
 *
 *
 * Optional flags for names
 *
 *
 *
 * Flag
 * Description
 *
 *
 *
 *
 * /service=service
 * mailbox access service, default is "imap"
 *
 *
 * /user=user
 * remote user name for login on the server
 *
 *
 * /authuser=user
 * remote authentication user; if specified this is the user name
 * whose password is used (e.g. administrator)
 *
 *
 * /anonymous
 * remote access as anonymous user
 *
 *
 * /debug
 * record protocol telemetry in application's debug log
 *
 *
 * /secure
 * do not transmit a plaintext password over the network
 *
 *
 * /imap, /imap2,
 * /imap2bis, /imap4,
 * /imap4rev1
 * equivalent to /service=imap
 *
 *
 * /pop3
 * equivalent to /service=pop3
 *
 *
 * /nntp
 * equivalent to /service=nntp
 *
 *
 * /norsh
 * do not use rsh or ssh to establish a preauthenticated IMAP
 * session
 *
 *
 * /ssl
 * use the Secure Socket Layer to encrypt the session
 *
 *
 * /validate-cert
 * validate certificates from TLS/SSL server (this is the default
 * behavior)
 *
 *
 * /novalidate-cert
 * do not validate certificates from TLS/SSL server, needed if
 * server uses self-signed certificates
 *
 *
 * /tls
 * force use of start-TLS to encrypt the session, and reject
 * connection to servers that do not support it
 *
 *
 * /notls
 * do not do start-TLS to encrypt the session, even with servers
 * that support it
 *
 *
 * /readonly
 * request read-only mailbox open (IMAP only; ignored on NNTP, and
 * an error with SMTP and POP3)
 *
 *
 *
 *
 * @param $username The user name
 * @param $password The password associated with the username
 * @param int $options The options are a bit mask with one or more of
 * the following:
 *
 *
 *
 * OP_READONLY - Open mailbox read-only
 *
 *
 *
 *
 * OP_ANONYMOUS - Don't use or update a
 * .newsrc for news (NNTP only)
 *
 *
 *
 *
 * OP_HALFOPEN - For IMAP
 * and NNTP names, open a connection but
 * don't open a mailbox.
 *
 *
 *
 *
 * CL_EXPUNGE - Expunge mailbox automatically upon mailbox close
 * (see also imap_delete and
 * imap_expunge)
 *
 *
 *
 *
 * OP_DEBUG - Debug protocol negotiations
 *
 *
 *
 *
 * OP_SHORTCACHE - Short (elt-only) caching
 *
 *
 *
 *
 * OP_SILENT - Don't pass up events (internal use)
 *
 *
 *
 *
 * OP_PROTOTYPE - Return driver prototype
 *
 *
 *
 *
 * OP_SECURE - Don't do non-secure authentication
 *
 *
 *
 * @param int $n_retries Number of maximum connect attempts
 * @param array|null $params Connection parameters, the following (string) keys maybe used
 * to set one or more connection parameters:
 *
 *
 *
 * DISABLE_AUTHENTICATOR - Disable authentication properties
 *
 *
 *
 * @return resource Returns an IMAP stream on success.
 * @throws ImapException
 *
 */
function imap_open($mailbox, $username, $password, $options = 0, $n_retries = 0, array $params = null)
{

    $result = \imap_open($mailbox, $username, $password, $options, $n_retries, $params);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * This function renames on old mailbox to new mailbox (see
 * imap_open for the format of
 * mbox names).
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $old_mbox The old mailbox name, see imap_open for more
 * information
 * @param $new_mbox The new mailbox name, see imap_open for more
 * information
 * @throws ImapException
 *
 */
function imap_renamemailbox($imap_stream, $old_mbox, $new_mbox)
{

    $result = \imap_renamemailbox($imap_stream, $old_mbox, $new_mbox);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Saves a part or the whole body of the specified message.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param string|resource $file The path to the saved file as a string, or a valid file descriptor
 * returned by fopen.
 * @param int $msg_number The message number
 * @param $part_number The part number. It is a string of integers delimited by period which
 * index into a body part list as per the IMAP4 specification
 * @param int $options A bitmask with one or more of the following:
 *
 *
 *
 * FT_UID - The msg_number is a UID
 *
 *
 *
 *
 * FT_PEEK - Do not set the \Seen flag if
 * not already set
 *
 *
 *
 *
 * FT_INTERNAL - The return string is in
 * internal format, will not canonicalize to CRLF.
 *
 *
 *
 * @throws ImapException
 *
 */
function imap_savebody($imap_stream, $file, $msg_number, $part_number = "", $options = 0)
{

    $result = \imap_savebody($imap_stream, $file, $msg_number, $part_number, $options);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Sets an upper limit quota on a per mailbox basis.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $quota_root The mailbox to have a quota set. This should follow the IMAP standard
 * format for a mailbox: user.name.
 * @param int $quota_limit The maximum size (in KB) for the quota_root
 * @throws ImapException
 *
 */
function imap_set_quota($imap_stream, $quota_root, $quota_limit)
{

    $result = \imap_set_quota($imap_stream, $quota_root, $quota_limit);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Sets the ACL for a giving mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @param $id The user to give the rights to.
 * @param $rights The rights to give to the user. Passing an empty string will delete
 * acl.
 * @throws ImapException
 *
 */
function imap_setacl($imap_stream, $mailbox, $id, $rights)
{

    $result = \imap_setacl($imap_stream, $mailbox, $id, $rights);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Causes a store to add the specified flag to the
 * flags set for the messages in the specified
 * sequence.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $sequence A sequence of message numbers. You can enumerate desired messages
 * with the X,Y syntax, or retrieve all messages
 * within an interval with the X:Y syntax
 * @param $flag The flags which you can set are \Seen,
 * \Answered, \Flagged,
 * \Deleted, and \Draft as
 * defined by RFC2060.
 * @param int $options A bit mask that may contain the single option:
 *
 *
 *
 * ST_UID - The sequence argument contains UIDs
 * instead of sequence numbers
 *
 *
 *
 * @throws ImapException
 *
 */
function imap_setflag_full($imap_stream, $sequence, $flag, $options = NIL)
{

    $result = \imap_setflag_full($imap_stream, $sequence, $flag, $options);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Subscribe to a new mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @throws ImapException
 *
 */
function imap_subscribe($imap_stream, $mailbox)
{

    $result = \imap_subscribe($imap_stream, $mailbox);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Gets a tree of a threaded message.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param int $options
 * @return array imap_thread returns an associative array containing
 * a tree of messages threaded by REFERENCES.
 *
 * Every message in the current mailbox will be represented by three entries
 * in the resulting array:
 *
 *
 * $thread["XX.num"] - current message number
 *
 *
 * $thread["XX.next"]
 *
 *
 * $thread["XX.branch"]
 *
 *
 * @throws ImapException
 *
 */
function imap_thread($imap_stream, $options = SE_FREE): array
{

    $result = \imap_thread($imap_stream, $options);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * Sets or fetches the imap timeout.
 *
 * @param int $timeout_type One of the following:
 * IMAP_OPENTIMEOUT,
 * IMAP_READTIMEOUT,
 * IMAP_WRITETIMEOUT, or
 * IMAP_CLOSETIMEOUT.
 * @param int $timeout The timeout, in seconds.
 * @return mixed If the timeout parameter is set, this function
 * returns TRUE on success.
 *
 * If timeout  is not provided or evaluates to -1,
 * the current timeout value of timeout_type is
 * returned as an integer.
 * @throws ImapException
 *
 */
function imap_timeout($timeout_type, $timeout = -1)
{

    $result = \imap_timeout($timeout_type, $timeout);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}


/**
 * Removes the deletion flag for a specified message, which is set by
 * imap_delete or imap_mail_move.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param int $msg_number The message number
 * @param int $flags
 * @throws ImapException
 *
 */
function imap_undelete($imap_stream, $msg_number, $flags = 0)
{

    $result = \imap_undelete($imap_stream, $msg_number, $flags);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Unsubscribe from the specified mailbox.
 *
 * @param resource $imap_stream An IMAP stream returned by
 * imap_open.
 * @param $mailbox The mailbox name, see imap_open for more
 * information
 * @throws ImapException
 *
 */
function imap_unsubscribe($imap_stream, $mailbox)
{

    $result = \imap_unsubscribe($imap_stream, $mailbox);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
}


/**
 * Encode a UTF-8 string to modified UTF-7 (as specified in RFC 2060, section 5.1.3).
 *
 * @param string $in A UTF-8 encoded string.
 * @return string Returns in converted to modified UTF-7.
 * @throws ImapException
 *
 */
function imap_utf8_to_mutf7($in)
{

    $result = \imap_utf8_to_mutf7($in);
    if ($result === false) {
        throw ImapException::createFromPhpError();
    }
    return $result;
}
