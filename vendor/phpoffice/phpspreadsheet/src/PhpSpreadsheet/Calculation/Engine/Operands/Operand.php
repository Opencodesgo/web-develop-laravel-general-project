<?php
/**
 * PhpOffice，Php的电子表格，计算，引擎，操作数，Operand
 */

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Operands;

interface Operand
{
    public static function fromParser(string $formula, int $index, array $matches): self;

    public function value(): string;
}
