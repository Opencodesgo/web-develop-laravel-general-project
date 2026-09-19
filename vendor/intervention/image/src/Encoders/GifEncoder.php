<?php
/**
 * Intervention，图片，编码器，Gif 编码器
 */

declare(strict_types=1);

namespace Intervention\Image\Encoders;

use Intervention\Image\Drivers\SpecializableEncoder;

class GifEncoder extends SpecializableEncoder
{
    /**
     * Create new encoder object
	 * 创建新的编码器对象
     *
     * @return void
     */
    public function __construct(public bool $interlaced = false)
    {
        //
    }
}
