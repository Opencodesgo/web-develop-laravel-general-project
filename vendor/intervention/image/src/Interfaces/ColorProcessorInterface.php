<?php
/**
 * Intervention，图片，接口，彩色处理器接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\ColorException;

interface ColorProcessorInterface
{
    /**
     * Turn given color in the driver's color implementation
	 * 在驱动程序的颜色实现中转换给定的颜色
     *
     * @throws ColorException
     */
    public function colorToNative(ColorInterface $color): mixed;

    /**
     * Turn the given driver's definition of a color into a color object
	 * 将给定的驱动器的颜色定义为颜色对象
     *
     * @throws ColorException
     */
    public function nativeToColor(mixed $native): ColorInterface;
}
