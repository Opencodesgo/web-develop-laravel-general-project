<?php
/**
 * PhpOffice，Php的电子表格，工作表，HeaderFooterDrawing
 */

namespace PhpOffice\PhpSpreadsheet\Worksheet;

class HeaderFooterDrawing extends Drawing
{
    /**
     * Get hash code.
	 * 获取散列代码
     *
     * @return string Hash code
     */
    public function getHashCode(): string
    {
        return md5(
            $this->getPath()
            . $this->name
            . $this->offsetX
            . $this->offsetY
            . $this->width
            . $this->height
            . __CLASS__
        );
    }
}
