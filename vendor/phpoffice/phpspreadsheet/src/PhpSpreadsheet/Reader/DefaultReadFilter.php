<?php
/**
 * PhpOffice，Php的电子表格，阅读器，默认读取过滤器
 */

namespace PhpOffice\PhpSpreadsheet\Reader;

class DefaultReadFilter implements IReadFilter
{
    /**
     * Should this cell be read?
	 * 这个单元格应该被读取吗?
     *
     * @param string $columnAddress Column address (as a string value like "A", or "IV")
     * @param int $row Row number
     * @param string $worksheetName Optional worksheet name
     */
    public function readCell(string $columnAddress, int $row, string $worksheetName = ''): bool
    {
        return true;
    }
}
