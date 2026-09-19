<?php
/**
 * PhpOffice，Php的电子表格，Chart，渲染器，IRenderer
 */

namespace PhpOffice\PhpSpreadsheet\Chart\Renderer;

use PhpOffice\PhpSpreadsheet\Chart\Chart;

interface IRenderer
{
    /**
     * IRenderer constructor.
	 * IRenderer构造函数
     */
    public function __construct(Chart $chart);

    /**
     * Render the chart to given file (or stream).
     *
     * @param ?string $filename Name of the file render to
     *
     * @return bool true on success
     */
    public function render(?string $filename): bool;
}
