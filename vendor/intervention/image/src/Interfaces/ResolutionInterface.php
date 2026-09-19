<?php
/**
 * Intervention，图片，接口，分辨接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface ResolutionInterface
{
    /**
     * Return resolution of x-axis
	 * x轴返回分辨率
     */
    public function x(): float;

    /**
     * Set resolution on x-axis
	 * 设置x轴分辨率
     */
    public function setX(float $x): self;

    /**
     * Return resolution on y-axis
	 * y轴返回分辨率
     */
    public function y(): float;

    /**
     * Set resolution on y-axis
	 * y轴的分辨率
     */
    public function setY(float $y): self;

    /**
     * Convert the resolution to DPI
	 * 将分辨率转换为DPI
     */
    public function perInch(): self;

    /**
     * Convert the resolution to DPCM
	 * 将分辨率转换为DPCM
     */
    public function perCm(): self;

    /**
     * Return string representation of unit
	 * 单位返回字符串表示
     */
    public function unit(): string;

    /**
     * Transform object to string
	 * 转换对象到字符串
     */
    public function toString(): string;

    /**
     * Cast object to string
	 * 将对象抛到字符串中
     */
    public function __toString(): string;
}
