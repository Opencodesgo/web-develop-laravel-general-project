<?php
/**
 * Intervention，图片，接口，编码图像界面
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface EncodedImageInterface extends FileInterface
{
    /**
     * Return Media (MIME) Type of encoded image
	 * 返回媒体(MIME)类型的编码图像
     */
    public function mediaType(): string;

    /**
     * Alias of self::mediaType()
     */
    public function mimetype(): string;

    /**
     * Transform encoded image data into an data uri string
	 * 将编码的图像数据转换为一个数据uri字符串
     */
    public function toDataUri(): string;
}
