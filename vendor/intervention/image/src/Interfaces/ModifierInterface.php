<?php
/**
 * Intervention，图片，接口，编辑器接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface ModifierInterface
{
    /**
     * Apply modifications of the current modifier to the given image
	 * 将当前修改器的修改应用于给定的图像
     *
     * @throws RuntimeException
     */
    public function apply(ImageInterface $image): ImageInterface;
}
