<?php
/**
 * PhpOffice，Php的电子表格，作者，Ods，Writer Part
 */

namespace PhpOffice\PhpSpreadsheet\Writer\Ods;

use PhpOffice\PhpSpreadsheet\Writer\Ods;

abstract class WriterPart
{
    /**
     * Parent Ods object.
	 * 父的Ods对象
     */
    private Ods $parentWriter;

    /**
     * Get Ods writer.
     */
    public function getParentWriter(): Ods
    {
        return $this->parentWriter;
    }

    /**
     * Set parent Ods writer.
     */
    public function __construct(Ods $writer)
    {
        $this->parentWriter = $writer;
    }

    abstract public function write(): string;
}
