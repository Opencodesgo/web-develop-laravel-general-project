<?php
/**
 * ZipStream，异常，StreamNotSeekableException
 */

declare(strict_types=1);

namespace ZipStream\Exception;

use ZipStream\Exception;

/**
 * This Exception gets invoked if a non seekable stream is
 * provided and zero headers are disabled.
 * 如果提供了不可查的流,并禁用了零头,则会调用这个异常。
 */
class StreamNotSeekableException extends Exception
{
    /**
     * @internal
     */
    public function __construct()
    {
        parent::__construct('enableZeroHeader must be enable to add non seekable streams');
    }
}
