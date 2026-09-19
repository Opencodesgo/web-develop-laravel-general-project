<?php
/**
 * Intervention，图片，接口，编码器接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface EncoderInterface
{
    /**
     * Encode given image
	 * 编码给定图像
     *
     * @throws RuntimeException
     */
    public function encode(ImageInterface $image): EncodedImageInterface;
}
