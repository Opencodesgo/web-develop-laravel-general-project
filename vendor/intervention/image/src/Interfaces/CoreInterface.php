<?php
/**
 * Intervention，图片，接口，核心接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\AnimationException;

interface CoreInterface extends CollectionInterface
{
    /**
     * return driver's representation of the image core.
	 * 返回驱动器的图像核心表示
     *
     * @throws AnimationException
     */
    public function native(): mixed;

    /**
     * Set driver's representation of the image core.
	 * 设置驱动程序的图像核心表示
     *
     * @return CoreInterface<FrameInterface>
     */
    public function setNative(mixed $native): self;

    /**
     * Count number of frames of animated image core
	 * 动画图像核心帧数
     */
    public function count(): int;

    /**
     * Return frame of given position in an animated image
	 * 在动画图像中给定位置的返回帧
     *
     * @throws AnimationException
     */
    public function frame(int $position): FrameInterface;

    /**
     * Add new frame to core
	 * 添加新的框架到核心
     *
     * @return CoreInterface<FrameInterface>
     */
    public function add(FrameInterface $frame): self;

    /**
     * Return number of repetitions of an animated image
	 * 动画图像的重复次数
     */
    public function loops(): int;

    /**
     * Set the number of repetitions for an animation. Where a
     * value of 0 means infinite repetition.
	 * 为动画设置重复次数。0的值意味着无限重复。
     *
     * @return CoreInterface<FrameInterface>
     */
    public function setLoops(int $loops): self;

    /**
     * Get first frame in core
	 * 核心的第一个帧
     *
     * @throws AnimationException
     */
    public function first(): FrameInterface;

    /**
     * Get last frame in core
	 * 完成核心框架
     *
     * @throws AnimationException
     */
    public function last(): FrameInterface;
}
