<?php
/**
 * PhpOffice，Php的电子表格，命名的范围
 */

namespace PhpOffice\PhpSpreadsheet;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class NamedRange extends DefinedName
{
    /**
     * Create a new Named Range.
	 * 创建一个新的命名范围
     */
    public function __construct(
        string $name,
        ?Worksheet $worksheet = null,
        string $range = 'A1',
        bool $localOnly = false,
        ?Worksheet $scope = null
    ) {
        if ($worksheet === null && $scope === null) {
            throw new Exception('You must specify a worksheet or a scope for a Named Range');
			# 您必须指定一个工作表或一个命名范围的范围
        }
        parent::__construct($name, $worksheet, $range, $localOnly, $scope);
    }

    /**
     * Get the range value.
	 * 获取范围值
     */
    public function getRange(): string
    {
        return $this->value;
    }

    /**
     * Set the range value.
	 * 设置范围值
     */
    public function setRange(string $range): self
    {
        if (!empty($range)) {
            $this->value = $range;
        }

        return $this;
    }

    public function getCellsInRange(): array
    {
        $range = $this->value;
        if (str_starts_with($range, '=')) {
            $range = substr($range, 1);
        }

        return Coordinate::extractAllCellReferencesInRange($range);
    }
}
