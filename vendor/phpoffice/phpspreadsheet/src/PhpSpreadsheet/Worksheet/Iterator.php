<?php
/**
 * PhpOffice，Php的电子表格，工作表，Iterator
 */

namespace PhpOffice\PhpSpreadsheet\Worksheet;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

/**
 * @implements \Iterator<int, Worksheet>
 */
class Iterator implements \Iterator
{
    /**
     * Spreadsheet to iterate.
	 * 通过电子表格进行迭代
     */
    private Spreadsheet $subject;

    /**
     * Current iterator position.
	 * 当前迭代器位置
     */
    private int $position = 0;

    /**
     * Create a new worksheet iterator.
	 * 创建一个新的工作表迭代器
     */
    public function __construct(Spreadsheet $subject)
    {
        // Set subject
        $this->subject = $subject;
    }

    /**
     * Rewind iterator.
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * Current Worksheet.
     */
    public function current(): Worksheet
    {
        return $this->subject->getSheet($this->position);
    }

    /**
     * Current key.
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * Next value.
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * Are there more Worksheet instances available?
     */
    public function valid(): bool
    {
        return $this->position < $this->subject->getSheetCount() && $this->position >= 0;
    }
}
