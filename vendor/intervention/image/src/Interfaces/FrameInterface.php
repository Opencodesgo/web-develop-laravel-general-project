<?php
/**
 * Intervention，图片，接口，框架接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface FrameInterface
{
    /**
     * Return image data of frame in driver specific format
	 * 基于驱动器特定格式的帧图像数据
     */
    public function native(): mixed;

    /**
     * Set image data of drame in driver specific format
	 * 在驱动器特定格式下设置drame的图像数据
     */
    public function setNative(mixed $native): self;

    /**
     * Transform frame into an image
	 * 将框架转换成图像
     *
     * @throws RuntimeException
     */
    public function toImage(DriverInterface $driver): ImageInterface;

    /**
     * Get image size of current frame
	 * 获取当前帧的图像大小
     */
    public function size(): SizeInterface;

    /**
     * Return animation delay of current frame in seconds
	 * 在秒内返回当前帧的动画延迟
     */
    public function delay(): float;

    /**
     * Set animation frame delay in seoncds
	 * 在seoncds中设置动画帧延迟
     */
    public function setDelay(float $delay): self;

    /**
     * Get disposal method of current frame
	 * 得到当前框架的处理方法
     */
    public function dispose(): int;

    /**
     * Set disposal method of current frame
	 * 当前框架的设置处理方法
     */
    public function setDispose(int $dispose): self;

    /**
     * Set pixel offset of current frame
	 * 当前帧的像素偏移量
     */
    public function setOffset(int $left, int $top): self;

    /**
     * Get left offset in pixels
	 * 在像素上得到左偏置
     */
    public function offsetLeft(): int;

    /**
     * Set left pixel offset for current frame
	 * 为当前帧设置左像素偏移量
     */
    public function setOffsetLeft(int $offset): self;

    /**
     * Get top pixel offset of current frame
	 * 获得当前帧的最高像素偏移量
     */
    public function offsetTop(): int;

    /**
     * Set top pixel offset of current frame
     */
    public function setOffsetTop(int $offset): self;
}
