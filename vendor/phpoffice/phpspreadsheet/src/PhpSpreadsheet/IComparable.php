<?php
/**
 * PhpOffice，Php的电子表格，IComparable
 */

namespace PhpOffice\PhpSpreadsheet;

interface IComparable
{
    /**
     * Get hash code.
	 * 获取哈希码
     *
     * @return string Hash code
     */
    public function getHashCode(): string;
}
