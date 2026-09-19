<?php
/**
 * PhpOffice，Php的电子表格，计算，引擎，循环参考堆栈
 */

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine;

class CyclicReferenceStack
{
    /**
     * The call stack for calculated cells.
	 * 计算单元的调用堆栈
     *
     * @var mixed[]
     */
    private array $stack = [];

    /**
     * Return the number of entries on the stack.
	 * 返回堆栈上的条目数
     */
    public function count(): int
    {
        return count($this->stack);
    }

    /**
     * Push a new entry onto the stack.
	 * 将一个新的条目推到堆栈上
     */
    public function push(mixed $value): void
    {
        $this->stack[$value] = $value;
    }

    /**
     * Pop the last entry from the stack.
	 * 从堆栈中弹出最后一个条目
     */
    public function pop(): mixed
    {
        return array_pop($this->stack);
    }

    /**
     * Test to see if a specified entry exists on the stack.
     *
     * @param mixed $value The value to test
     */
    public function onStack(mixed $value): bool
    {
        return isset($this->stack[$value]);
    }

    /**
     * Clear the stack.
     */
    public function clear(): void
    {
        $this->stack = [];
    }

    /**
     * Return an array of all entries on the stack.
     *
     * @return mixed[]
     */
    public function showStack(): array
    {
        return $this->stack;
    }
}
