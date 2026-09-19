<?php
/**
 * Intervention，图片，接口，大小接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\GeometryException;

interface SizeInterface
{
    /**
     * Get width
	 * 得到宽度
     */
    public function width(): int;

    /**
     * Get height
	 * 得到高度
     */
    public function height(): int;

    /**
     * Get pivot point
	 * 得到枢轴点
     */
    public function pivot(): PointInterface;

    /**
     * Set width
	 * 设置宽度
     */
    public function setWidth(int $width): self;

    /**
     * Set height
	 * 设置高度
     */
    public function setHeight(int $height): self;

    /**
     * Set pivot point
	 * 设置枢轴点
     */
    public function setPivot(PointInterface $pivot): self;

    /**
     * Calculate aspect ratio of the current size
	 * 计算当前尺寸的纵横比
     */
    public function aspectRatio(): float;

    /**
     * Determine if current size fits into given size
	 * 确定当前尺寸是否适合给定尺寸
     */
    public function fitsInto(self $size): bool;

    /**
     * Determine if size is in landscape format
	 * 确定尺寸是否为景观格式
     */
    public function isLandscape(): bool;

    /**
     * Determine if size is in portrait format
	 * 确定尺寸是否为肖像格式
     */
    public function isPortrait(): bool;

    /**
     * Move pivot to given position in size
	 * 移动支点以给定位置
     */
    public function movePivot(string $position, int $offset_x = 0, int $offset_y = 0): self;

    /**
     * Align pivot of current object to given position
	 * 将当前对象的中心对齐到给定位置
     */
    public function alignPivotTo(self $size, string $position): self;

    /**
     * Calculate the relative position to another Size
     * based on the pivot point settings of both sizes.
	 * 根据两个大小的主点设置计算相对位置到另一个大小
     */
    public function relativePositionTo(self $size): PointInterface;

    /**
     * @see ImageInterface::resize()
     *
     * @throws GeometryException
     */
    public function resize(?int $width = null, ?int $height = null): self;

    /**
     * @see ImageInterface::resizeDown()
     *
     * @throws GeometryException
     */
    public function resizeDown(?int $width = null, ?int $height = null): self;

    /**
     * @see ImageInterface::scale()
     *
     * @throws GeometryException
     */
    public function scale(?int $width = null, ?int $height = null): self;

    /**
     * @see ImageInterface::scaleDown()
     *
     * @throws GeometryException
     */
    public function scaleDown(?int $width = null, ?int $height = null): self;

    /**
     * @see ImageInterface::cover()
     *
     * @throws GeometryException
     */
    public function cover(int $width, int $height): self;

    /**
     * @see ImageInterface::contain()
     *
     * @throws GeometryException
     */
    public function contain(int $width, int $height): self;

    /**
     * @throws GeometryException
     */
    public function containMax(int $width, int $height): self;
}
