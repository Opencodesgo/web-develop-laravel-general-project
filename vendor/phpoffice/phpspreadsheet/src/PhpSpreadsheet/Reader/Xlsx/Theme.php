<?php
/**
 * PhpOffice，Php的电子表格，阅读器，Xlsx，Theme
 */

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Theme
{
    /**
     * Theme Name.
	 * Theme名称
     */
    private string $themeName;

    /**
     * Colour Scheme Name.
	 * 颜色计划名称
     */
    private string $colourSchemeName;

    /**
     * Colour Map.
     *
     * @var string[]
     */
    private array $colourMap;

    /**
     * Create a new Theme.
	 * 创造一个新的主题
     *
     * @param string[] $colourMap
     */
    public function __construct(string $themeName, string $colourSchemeName, array $colourMap)
    {
        // Initialise values
        $this->themeName = $themeName;
        $this->colourSchemeName = $colourSchemeName;
        $this->colourMap = $colourMap;
    }

    /**
     * Not called by Reader, never accessible any other time.
	 * 没有被读者召唤,任何时候都不能访问。
     *
     * @codeCoverageIgnore
     */
    public function getThemeName(): string
    {
        return $this->themeName;
    }

    /**
     * Not called by Reader, never accessible any other time.
	 * 没有被读者召唤,任何时候都不能访问。
     *
     * @codeCoverageIgnore
     */
    public function getColourSchemeName(): string
    {
        return $this->colourSchemeName;
    }

    /**
     * Get colour Map Value by Position.
     */
    public function getColourByIndex(int $index): ?string
    {
        return $this->colourMap[$index] ?? null;
    }
}
