<?php

namespace Safe;

use Safe\Exceptions\FtpException;

/**
 * Sends an ALLO command to the remote FTP server to
 * allocate space for a file to be uploaded.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param int $filesize The number of bytes to allocate.
 * @param $result A textual representation of the servers response will be returned by
 * reference in result if a variable is provided.
 * @throws FtpException
 *
 */
function ftp_alloc($ftp_stream, $filesize, string &$result = null)
{

    $result = \ftp_alloc($ftp_stream, $filesize, $result);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $ftp
 * @param $remote_file
 * @param $local_file
 * @param int $mode
 * @throws FtpException
 *
 */
function ftp_append($ftp, $remote_file, $local_file, $mode = FTP_IMAGE)
{

    $result = \ftp_append($ftp, $remote_file, $local_file, $mode);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Changes to the parent directory.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @throws FtpException
 *
 */
function ftp_cdup($ftp_stream)
{

    $result = \ftp_cdup($ftp_stream);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Changes the current directory to the specified one.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $directory The target directory.
 * @throws FtpException
 *
 */
function ftp_chdir($ftp_stream, $directory)
{

    $result = \ftp_chdir($ftp_stream, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Sets the permissions on the specified remote file to
 * mode.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param int $mode The new permissions, given as an octal value.
 * @param string $filename The remote file.
 * @return int Returns the new file permissions on success.
 * @throws FtpException
 *
 */
function ftp_chmod($ftp_stream, $mode, $filename)
{

    $result = \ftp_chmod($ftp_stream, $mode, $filename);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_close closes the given link identifier
 * and releases the resource.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @throws FtpException
 *
 */
function ftp_close($ftp_stream)
{

    $result = \ftp_close($ftp_stream);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_connect opens an FTP connection to the
 * specified host.
 *
 * @param $host The FTP server address. This parameter shouldn't have any trailing
 * slashes and shouldn't be prefixed with ftp://.
 * @param int $port This parameter specifies an alternate port to connect to. If it is
 * omitted or set to zero, then the default FTP port, 21, will be used.
 * @param int $timeout This parameter specifies the timeout in seconds for all subsequent network operations.
 * If omitted, the default value is 90 seconds. The timeout can be changed and
 * queried at any time with ftp_set_option and
 * ftp_get_option.
 * @return resource Returns a FTP stream on success.
 * @throws FtpException
 *
 */
function ftp_connect($host, $port = 21, $timeout = 90)
{

    $result = \ftp_connect($host, $port, $timeout);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_delete deletes the file specified by
 * path from the FTP server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $path The file to delete.
 * @throws FtpException
 *
 */
function ftp_delete($ftp_stream, $path)
{

    $result = \ftp_delete($ftp_stream, $path);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_fget retrieves remote_file
 * from the FTP server, and writes it to the given file pointer.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param resource $handle An open file pointer in which we store the data.
 * @param $remote_file The remote file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $resumepos The position in the remote file to start downloading from.
 * @throws FtpException
 *
 */
function ftp_fget($ftp_stream, $handle, $remote_file, $mode = FTP_IMAGE, $resumepos = 0)
{

    $result = \ftp_fget($ftp_stream, $handle, $remote_file, $mode, $resumepos);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_fput uploads the data from a file pointer
 * to a remote file on the FTP server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $remote_file The remote file path.
 * @param resource $handle An open file pointer on the local file. Reading stops at end of file.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $startpos The position in the remote file to start uploading to.
 * @throws FtpException
 *
 */
function ftp_fput($ftp_stream, $remote_file, $handle, $mode = FTP_IMAGE, $startpos = 0)
{

    $result = \ftp_fput($ftp_stream, $remote_file, $handle, $mode, $startpos);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_get retrieves a remote file from the FTP server,
 * and saves it into a local file.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $local_file The local file path (will be overwritten if the file already exists).
 * @param $remote_file The remote file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $resumepos The position in the remote file to start downloading from.
 * @throws FtpException
 *
 */
function ftp_get($ftp_stream, $local_file, $remote_file, $mode = FTP_BINARY, $resumepos = 0)
{

    $result = \ftp_get($ftp_stream, $local_file, $remote_file, $mode, $resumepos);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Logs in to the given FTP stream.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $username The username (USER).
 * @param $password The password (PASS).
 * @throws FtpException
 *
 */
function ftp_login($ftp_stream, $username, $password)
{

    $result = \ftp_login($ftp_stream, $username, $password);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Creates the specified directory on the FTP server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The name of the directory that will be created.
 * @return string Returns the newly created directory name on success.
 * @throws FtpException
 *
 */
function ftp_mkdir($ftp_stream, $directory)
{

    $result = \ftp_mkdir($ftp_stream, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The directory to be listed.
 * @return array Returns an array of arrays with file infos from the specified directory on success.
 * @throws FtpException
 *
 */
function ftp_mlsd($ftp_stream, $directory): array
{

    $result = \ftp_mlsd($ftp_stream, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $directory The directory to be listed. This parameter can also include arguments, eg.
 * ftp_nlist($conn_id, "-la /your/dir");
 * Note that this parameter isn't escaped so there may be some issues with
 * filenames containing spaces and other characters.
 * @return array Returns an array of filenames from the specified directory on success.
 * @throws FtpException
 *
 */
function ftp_nlist($ftp_stream, $directory): array
{

    $result = \ftp_nlist($ftp_stream, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_pasv turns on or off passive mode. In
 * passive mode, data connections are initiated by the client,
 * rather than by the server.
 * It may be needed if the client is behind firewall.
 *
 * Please note that ftp_pasv can only be called after a
 * successful login or otherwise it will fail.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param bool $pasv If TRUE, the passive mode is turned on, else it's turned off.
 * @throws FtpException
 *
 */
function ftp_pasv($ftp_stream, $pasv)
{

    $result = \ftp_pasv($ftp_stream, $pasv);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_put stores a local file on the FTP server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $remote_file The remote file path.
 * @param $local_file The local file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $startpos The position in the remote file to start uploading to.
 * @throws FtpException
 *
 */
function ftp_put($ftp_stream, $remote_file, $local_file, $mode = FTP_IMAGE, $startpos = 0)
{

    $result = \ftp_put($ftp_stream, $remote_file, $local_file, $mode, $startpos);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @return string Returns the current directory name.
 * @throws FtpException
 *
 */
function ftp_pwd($ftp_stream)
{

    $result = \ftp_pwd($ftp_stream);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_rename renames a file or a directory on the FTP
 * server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $oldname The old file/directory name.
 * @param $newname The new name.
 * @throws FtpException
 *
 */
function ftp_rename($ftp_stream, $oldname, $newname)
{

    $result = \ftp_rename($ftp_stream, $oldname, $newname);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Removes the specified directory on the FTP server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $directory The directory to delete. This must be either an absolute or relative
 * path to an empty directory.
 * @throws FtpException
 *
 */
function ftp_rmdir($ftp_stream, $directory)
{

    $result = \ftp_rmdir($ftp_stream, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_site sends the given SITE
 * command to the FTP server.
 *
 * SITE commands are not standardized, and vary from server
 * to server. They are useful for handling such things as file permissions and
 * group membership.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param $command The SITE command. Note that this parameter isn't escaped so there may
 * be some issues with filenames containing spaces and other characters.
 * @throws FtpException
 *
 */
function ftp_site($ftp_stream, $command)
{

    $result = \ftp_site($ftp_stream, $command);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_ssl_connect opens an explicit SSL-FTP connection to the
 * specified host. That implies that
 * ftp_ssl_connect will succeed even if the server is not
 * configured for SSL-FTP, or its certificate is invalid. Only when
 * ftp_login is called, the client will send the
 * appropriate AUTH FTP command, so ftp_login will fail in
 * the mentioned cases.
 *
 * @param $host The FTP server address. This parameter shouldn't have any trailing
 * slashes and shouldn't be prefixed with ftp://.
 * @param int $port This parameter specifies an alternate port to connect to. If it is
 * omitted or set to zero, then the default FTP port, 21, will be used.
 * @param int $timeout This parameter specifies the timeout for all subsequent network operations.
 * If omitted, the default value is 90 seconds. The timeout can be changed and
 * queried at any time with ftp_set_option and
 * ftp_get_option.
 * @return resource Returns a SSL-FTP stream on success.
 * @throws FtpException
 *
 */
function ftp_ssl_connect($host, $port = 21, $timeout = 90)
{

    $result = \ftp_ssl_connect($host, $port, $timeout);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the system type identifier of the remote FTP server.
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @return string Returns the remote system type.
 * @throws FtpException
 *
 */
function ftp_systype($ftp_stream)
{

    $result = \ftp_systype($ftp_stream);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}
