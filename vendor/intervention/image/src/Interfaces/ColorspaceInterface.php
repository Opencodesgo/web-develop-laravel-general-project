<?php
/**
 * Intervention，图片，接口，彩色空间接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface ColorspaceInterface
{
    /**
     * Convert given color to the format of the current colorspace
	 * 将给定的颜色转换为当前颜色空间的格式
     */
    public function importColor(ColorInterface $color): ColorInterface;

    /**
     * Create new color in colorspace from given normalized channel values
	 * 在colorspace中创建新的颜色,从给定的标准化通道值。
     *
     * @param array<float> $normalized
     */
    public function colorFromNormalized(array $normalized): ColorInterface;
}
