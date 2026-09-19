<?php
/**
 * Intervention，图片，接口，点接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface PointInterface
{
    /**
     * Return x position
	 * 返回x位置
     */
    public function x(): int;

    /**
     * Return y position
	 * 返回y位置
     */
    public function y(): int;

    /**
     * Set x position
	 * 设置x位置
     */
    public function setX(int $x): self;

    /**
     * Set y position
	 * 设置y位置
     */
    public function setY(int $y): self;

    /**
     * Move X coordinate
     */
    public function moveX(int $value): self;

    /**
     * Move Y coordinate
     */
    public function moveY(int $value): self;

    /**
     * Move position of current point by given coordinates
     */
    public function move(int $x, int $y): self;

    /**
     * Set position of point
     */
    public function setPosition(int $x, int $y): self;

    /**
     * Rotate point counter clock wise around given pivot point
     */
    public function rotate(float $angle, self $pivot): self;
}
