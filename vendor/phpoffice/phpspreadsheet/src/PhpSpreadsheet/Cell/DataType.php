<?php
/**
 * PhpOffice，Php的电子表格，单元格，数据类型
 */

namespace PhpOffice\PhpSpreadsheet\Cell;

use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;

class DataType
{
    // Data types
	// 数据类型
    const TYPE_STRING2 = 'str';
    const TYPE_STRING = 's';
    const TYPE_FORMULA = 'f';
    const TYPE_NUMERIC = 'n';
    const TYPE_BOOL = 'b';
    const TYPE_NULL = 'null';
    const TYPE_INLINE = 'inlineStr';
    const TYPE_ERROR = 'e';
    const TYPE_ISO_DATE = 'd';

    /**
     * List of error codes.
	 * 错误代码列表
     *
     * @var array<string, int>
     */
    private static array $errorCodes = [
        '#NULL!' => 0,
        '#DIV/0!' => 1,
        '#VALUE!' => 2,
        '#REF!' => 3,
        '#NAME?' => 4,
        '#NUM!' => 5,
        '#N/A' => 6,
        '#CALC!' => 7,
    ];

    public const MAX_STRING_LENGTH = 32767;

    /**
     * Get list of error codes.
	 * 获取错误代码列表
     *
     * @return array<string, int>
     */
    public static function getErrorCodes(): array
    {
        return self::$errorCodes;
    }

    /**
     * Check a string that it satisfies Excel requirements.
	 * 检查它满足Excel需求的字符串
     *
     * @param null|RichText|string $textValue Value to sanitize to an Excel string
     *
     * @return RichText|string Sanitized value
     */
    public static function checkString(null|RichText|string $textValue): RichText|string
    {
        if ($textValue instanceof RichText) {
            // TODO: Sanitize Rich-Text string (max. character count is 32,767)
            return $textValue;
        }

        // string must never be longer than 32,767 characters, truncate if necessary
        $textValue = StringHelper::substring((string) $textValue, 0, self::MAX_STRING_LENGTH);

        // we require that newline is represented as "\n" in core, not as "\r\n" or "\r"
        $textValue = str_replace(["\r\n", "\r"], "\n", $textValue);

        return $textValue;
    }

    /**
     * Check a value that it is a valid error code.
	 * 检查一个值,它是一个有效的错误代码。
     *
     * @param mixed $value Value to sanitize to an Excel error code
     *
     * @return string Sanitized value
     */
    public static function checkErrorCode(mixed $value): string
    {
        $value = (string) $value;

        if (!isset(self::$errorCodes[$value])) {
            $value = '#NULL!';
        }

        return $value;
    }
}
