<?php
/**
 * Intervention，图片，编码器，Webp 编码器
 */

declare(strict_types=1);

namespace Intervention\Image\Encoders;

use Intervention\Image\Drivers\SpecializableEncoder;

class WebpEncoder extends SpecializableEncoder
{
    /**
     * Create new encoder object
	 * 创建新的编码器对象
     *
     * @param null|bool $strip Strip EXIF metadata
     * @return void
     */
    public function __construct(
        public int $quality = self::DEFAULT_QUALITY,
        public ?bool $strip = null
    ) {
        //
    }
}
