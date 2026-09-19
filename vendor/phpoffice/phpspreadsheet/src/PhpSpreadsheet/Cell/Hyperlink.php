<?php
/**
 * PhpOffice，Php的电子表格，单元格，超链接
 */

namespace PhpOffice\PhpSpreadsheet\Cell;

class Hyperlink
{
    /**
     * URL to link the cell to.
	 * URL连接单元格
     */
    private string $url;

    /**
     * Tooltip to display on the hyperlink.
	 * 在超链接上显示的工具提示
     */
    private string $tooltip;

    /**
     * Create a new Hyperlink.
	 * 创建一个新的超链接
     *
     * @param string $url Url to link the cell to
     * @param string $tooltip Tooltip to display on the hyperlink
     */
    public function __construct(string $url = '', string $tooltip = '')
    {
        // Initialise member variables
        $this->url = $url;
        $this->tooltip = $tooltip;
    }

    /**
     * Get URL.
	 * 获取URL
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL.
	 * 设置URL
     *
     * @return $this
     */
    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get tooltip.
     */
    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    /**
     * Set tooltip.
     *
     * @return $this
     */
    public function setTooltip(string $tooltip): static
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    /**
     * Is this hyperlink internal? (to another worksheet).
     */
    public function isInternal(): bool
    {
        return str_contains($this->url, 'sheet://');
    }

    public function getTypeHyperlink(): string
    {
        return $this->isInternal() ? '' : 'External';
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode(): string
    {
        return md5(
            $this->url
            . $this->tooltip
            . __CLASS__
        );
    }
}
