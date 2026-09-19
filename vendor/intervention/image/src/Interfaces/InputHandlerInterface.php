<?php
/**
 * Intervention，图片，接口，输入处理程序接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface InputHandlerInterface
{
    /**
     * Try to decode the given input with each decoder of the the handler chain
	 * 试着用处理链的每个解码器解码给定的输入
     *
     * @throws RuntimeException
     */
    public function handle(mixed $input): ImageInterface|ColorInterface;
}
