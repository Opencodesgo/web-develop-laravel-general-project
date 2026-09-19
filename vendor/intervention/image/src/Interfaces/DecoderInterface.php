<?php
/**
 * Intervention，图片，接口，解码器接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface DecoderInterface
{
    /**
     * Decode given input either to color or image
	 * 解码给定的输入或颜色或图像
     *
     * @throws RuntimeException
     */
    public function decode(mixed $input): ImageInterface|ColorInterface;
}
