<?php
/**
 * PhpOffice，Php的电子表格，阅读器，Xls，错误代码
 */

namespace PhpOffice\PhpSpreadsheet\Reader\Xls;

class ErrorCode
{
    private const ERROR_CODE_MAP = [
        0x00 => '#NULL!',
        0x07 => '#DIV/0!',
        0x0F => '#VALUE!',
        0x17 => '#REF!',
        0x1D => '#NAME?',
        0x24 => '#NUM!',
        0x2A => '#N/A',
    ];

    /**
     * Map error code, e.g. '#N/A'.
     */
    public static function lookup(int $code): string|bool
    {
        return self::ERROR_CODE_MAP[$code] ?? false;
    }
}
