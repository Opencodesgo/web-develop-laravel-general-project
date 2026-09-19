<?php
/**
 * Intervention，图片，接口，Drawable 接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface DrawableInterface
{
    /**
     * Position of the drawable object
	 * 可拉伸物体的位置
     */
    public function position(): PointInterface;

    /**
     * Set position of the drawable object
	 * 绘图对象的设置位置
     */
    public function setPosition(PointInterface $position): self;

    /**
     * Set the background color of the drawable object
	 * 设置可绘图对象的背景颜色
     */
    public function setBackgroundColor(mixed $color): self;

    /**
     * Return background color of drawable object
	 * 可拉伸物体的返回背景颜色
     */
    public function backgroundColor(): mixed;

    /**
     * Determine if a background color was set
	 * 确定背景颜色是否设置
     */
    public function hasBackgroundColor(): bool;

    /**
     * Set border color & size of the drawable object
	 * 设置边框颜色和可画对象的大小
     */
    public function setBorder(mixed $color, int $size = 1): self;

    /**
     * Set border size of the drawable object
	 * 设置可绘图对象的边框大小
     */
    public function setBorderSize(int $size): self;

    /**
     * Set border color of the drawable object
	 * 绘制可拉伸物体的边框颜色
     */
    public function setBorderColor(mixed $color): self;

    /**
     * Get border size
	 * 获取边框大小
     */
    public function borderSize(): int;

    /**
     * Get border color of drawable object
	 * 获取可绘制对象的边框颜色
     */
    public function borderColor(): mixed;

    /**
     * Determine if the drawable object has a border
	 * 确定可绘制对象是否有边框
     */
    public function hasBorder(): bool;
}
