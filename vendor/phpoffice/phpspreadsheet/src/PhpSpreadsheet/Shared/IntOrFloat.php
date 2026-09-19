<?php
/**
 * PhpOffice，Php的电子表格，共享，IntOrFloat
 */

namespace PhpOffice\PhpSpreadsheet\Shared;

class IntOrFloat
{
    /**
     * Help some functions with large results operate correctly on 32-bit,
     * by returning result as int when possible, float otherwise.
	 * 帮助一些具有较大结果的函数在32位上正确操作,当可能时返回结果,否则就会浮动。
     */
    public static function evaluate(float|int $value): float|int
    {
        $iValue = (int) $value;

        return ($value == $iValue) ? $iValue : $value;
    }
}
