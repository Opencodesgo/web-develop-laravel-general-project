<?php
/**
 * PhpOffice，Php的电子表格，作者，Ods，Mimetype
 */

namespace PhpOffice\PhpSpreadsheet\Writer\Ods;

class Mimetype extends WriterPart
{
    /**
     * Write mimetype to plain text format.
	 * 将mimetype编写为纯文本格式
     *
     * @return string XML Output
     */
    public function write(): string
    {
        return 'application/vnd.oasis.opendocument.spreadsheet';
    }
}
