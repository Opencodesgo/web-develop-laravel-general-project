<?php
/**
 * Intervention，图片，接口，字体处理机接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\FontException;
use Intervention\Image\Typography\TextBlock;

interface FontProcessorInterface
{
    /**
     * Calculate size of bounding box of given text in conjunction with the given font
	 * 用给定的字体计算给定文本的边界框的大小
     *
     * @throws FontException
     */
    public function boxSize(string $text, FontInterface $font): SizeInterface;

    /**
     * Build TextBlock object from text string and align every line according
     * to text modifier's font object and position.
	 * 从文本字符串构建文本块对象,并根据文本修改器的字体对象和位置对齐每一行。
     *
     * @throws FontException
     */
    public function textBlock(string $text, FontInterface $font, PointInterface $position): TextBlock;

    /**
     * Calculate the actual font size to pass at the driver level
	 * 计算实际字体大小在驱动级别上传递
     */
    public function nativeFontSize(FontInterface $font): float;

    /**
     * Calculate the typographical font size in pixels
	 * 用像素计算字体大小
     *
     * @throws FontException
     */
    public function typographicalSize(FontInterface $font): int;

    /**
     * Calculates typographical cap height
	 * 计算排版帽高度
     *
     * @throws FontException
     */
    public function capHeight(FontInterface $font): int;

    /**
     * Calculates typographical leading size
	 * 计算排印行距大小
     *
     * @throws FontException
     */
    public function leading(FontInterface $font): int;
}
