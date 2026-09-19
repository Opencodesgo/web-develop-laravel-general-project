<?php
/**
 * PhpOffice，Php的电子表格，计算，异常处理程序
 */

namespace PhpOffice\PhpSpreadsheet\Calculation;

class ExceptionHandler
{
    /**
     * Register errorhandler.
     */
    public function __construct()
    {
        /** @var callable $callable */
        $callable = [Exception::class, 'errorHandlerCallback'];
        set_error_handler($callable, E_ALL);
    }

    /**
     * Unregister errorhandler.
     */
    public function __destruct()
    {
        restore_error_handler();
    }
}
