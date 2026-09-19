<?php
/**
 * ZipStream，异常，文件未找到异常
 */

declare(strict_types=1);

namespace ZipStream\Exception;

use ZipStream\Exception;

/**
 * This Exception gets invoked if a file wasn't found
 * 如果没有找到文件,这个异常就会被调用。
 */
class FileNotFoundException extends Exception
{
    /**
     * @internal
     */
    public function __construct(
        public readonly string $path
    ) {
        parent::__construct("The file with the path $path wasn't found.");
    }
}
