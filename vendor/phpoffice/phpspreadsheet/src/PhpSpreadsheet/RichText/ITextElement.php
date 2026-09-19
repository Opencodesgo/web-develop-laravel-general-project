<?php
/**
 * PhpOffice，Php的电子表格，富文本，IText元素
 */

namespace PhpOffice\PhpSpreadsheet\RichText;

use PhpOffice\PhpSpreadsheet\Style\Font;

interface ITextElement
{
    /**
     * Get text.
	 * 获得文本
     */
    public function getText(): string;

    /**
     * Set text.
	 * 设置文本
     *
     * @param string $text Text
     *
     * @return $this
     */
    public function setText(string $text): self;

    /**
     * Get font.
     */
    public function getFont(): ?Font;

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode(): string;
}
