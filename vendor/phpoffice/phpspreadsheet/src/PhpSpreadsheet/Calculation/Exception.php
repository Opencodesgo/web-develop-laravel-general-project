<?php
/**
 * PhpOffice，Php的电子表格，计算，异常
 */

namespace PhpOffice\PhpSpreadsheet\Calculation;

use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;

class Exception extends PhpSpreadsheetException
{
    public const CALCULATION_ENGINE_PUSH_TO_STACK = 1;

    /**
     * Error handler callback.
	 * 错误处理器回调
     */
    public static function errorHandlerCallback(int $code, string $string, string $file, int $line): void
    {
        $e = new self($string, $code);
        $e->line = $line;
        $e->file = $file;

        throw $e;
    }
}
