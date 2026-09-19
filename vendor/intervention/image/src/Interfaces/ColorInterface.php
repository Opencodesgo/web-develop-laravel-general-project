<?php
/**
 * Intervention，图片，接口，彩色接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\ColorException;
use Intervention\Image\Exceptions\RuntimeException;

interface ColorInterface
{
    /**
     * Static color factory method that takes any supported color format
     * and returns a corresponding color object
	 * 静态颜色工厂方法,使用任何支持的颜色格式,返回相应的颜色对象。
     *
     * @throws RuntimeException
     */
    public static function create(mixed $input): self;

    /**
     * Return colorspace of current color
	 * 当前颜色的返回颜色空间
     */
    public function colorspace(): ColorspaceInterface;

    /**
     * Cast color object to string
	 * 将颜色对象抛到字符串中
     */
    public function toString(): string;

    /**
     * Cast color object to array
	 * 将颜色对象投射到数组中
     *
     * @return array<int>
     */
    public function toArray(): array;

    /**
     * Cast color object to hex encoded web color
	 * 将彩色对象抛到六角编码的网络颜色
     */
    public function toHex(string $prefix = ''): string;

    /**
     * Return array of all color channels
	 * 所有颜色通道的返回数组
     *
     * @return array<ColorChannelInterface>
     */
    public function channels(): array;

    /**
     * Return array of normalized color channel values
	 * 归一化颜色通道值的返回数组
     *
     * @return array<float>
     */
    public function normalize(): array;

    /**
     * Retrieve the color channel by its classname
	 * 通过其类名检索颜色通道
     *
     * @throws ColorException
     */
    public function channel(string $classname): ColorChannelInterface;

    /**
     * Convert color to given colorspace
	 * 将颜色转换为给定的颜色空间
     */
    public function convertTo(string|ColorspaceInterface $colorspace): self;

    /**
     * Determine if the current color is gray
	 * 确定当前颜色是否为灰色
     */
    public function isGreyscale(): bool;

    /**
     * Determine if the current color is (semi) transparent
	 * 确定当前颜色是否为（半）透明
     */
    public function isTransparent(): bool;

    /**
     * Determine whether the current color is completely transparent
     */
    public function isClear(): bool;

    /**
     * Cast color object to string
     */
    public function __toString(): string;
}
