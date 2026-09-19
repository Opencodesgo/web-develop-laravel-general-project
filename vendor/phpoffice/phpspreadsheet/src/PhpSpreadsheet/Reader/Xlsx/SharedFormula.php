<?php
/**
 * PhpOffice，Php的电子表格，阅读器，Xlsx，共享公式
 */

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class SharedFormula
{
    private string $master;

    private string $formula;

    public function __construct(string $master, string $formula)
    {
        $this->master = $master;
        $this->formula = $formula;
    }

    public function master(): string
    {
        return $this->master;
    }

    public function formula(): string
    {
        return $this->formula;
    }
}
