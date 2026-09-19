<?php
/**
 * Intervention，图片，接口，彩色通道接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\ColorException;

interface ColorChannelInterface
{
    /**
     * Create new instance by either value or normalized value
	 * 以任何值或归一化的值创建新实例
     *
     * @throws ColorException
     */
    public function __construct(?int $value = null, ?float $normalized = null);

    /**
     * Return color channels integer value
	 * 返回颜色通道整数值
     */
    public function value(): int;

    /**
     * Return the channels value normalized to a float value form 0 to 1 by its range
	 * 将通道值归归为0到1的浮动值
     */
    public function normalize(int $precision = 32): float;

    /**
     * Throw exception if the given value is not applicable for channel
     * otherwise the value is returned unchanged.
	 * 如果给定的值不适用于信道,则抛出异常,否则值将没有改变。
     *
     * @throws ColorException
     */
    public function validate(mixed $value): mixed;

    /**
     * Return the the minimal possible value of the color channel
	 * 返回颜色通道的最小可能值
     */
    public function min(): int;

    /*
     * Return the the maximal possible value of the color channel
	 * 返回颜色通道的最大可能值
     *
     * @return int
     */
    public function max(): int;

    /**
     * Cast color channel's value to string
	 * 将颜色通道的值转换为字符串
     */
    public function toString(): string;

    /**
     * Cast color channel's value to string
     */
    public function __toString(): string;
}
