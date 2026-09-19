<?php
/**
 * PhpOffice，Php的电子表格，写入器，Xlsx，Writer Part
 */

namespace PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

abstract class WriterPart
{
    /**
     * Parent Xlsx object.
	 * 父Xlsx对象
     */
    private Xlsx $parentWriter;

    /**
     * Get parent Xlsx object.
	 * 获取父Xlsx对象
     */
    public function getParentWriter(): Xlsx
    {
        return $this->parentWriter;
    }

    /**
     * Set parent Xlsx object.
	 * 设置父Xlsx对象
     */
    public function __construct(Xlsx $writer)
    {
        $this->parentWriter = $writer;
    }
}
