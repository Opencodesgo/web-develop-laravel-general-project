<?php
/**
 * PhpOffice，Php的电子表格，命名的公式
 */

namespace PhpOffice\PhpSpreadsheet;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class NamedFormula extends DefinedName
{
    /**
     * Create a new Named Formula.
	 * 创建一个新的命名公式
     */
    public function __construct(
        string $name,
        ?Worksheet $worksheet = null,
        ?string $formula = null,
        bool $localOnly = false,
        ?Worksheet $scope = null
    ) {
        // Validate data
        if (!isset($formula)) {
            throw new Exception('You must specify a Formula value for a Named Formula');
        }
        parent::__construct($name, $worksheet, $formula, $localOnly, $scope);
    }

    /**
     * Get the formula value.
	 * 得到公式值
     */
    public function getFormula(): string
    {
        return $this->value;
    }

    /**
     * Set the formula value.
	 * 设置公式值
     */
    public function setFormula(string $formula): self
    {
        if (!empty($formula)) {
            $this->value = $formula;
        }

        return $this;
    }
}
