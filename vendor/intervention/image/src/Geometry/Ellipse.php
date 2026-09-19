<?php
/**
 * Intervention，图片，Geometry，Ellipse
 */

declare(strict_types=1);

namespace Intervention\Image\Geometry;

use Intervention\Image\Geometry\Traits\HasBackgroundColor;
use Intervention\Image\Geometry\Traits\HasBorder;
use Intervention\Image\Interfaces\DrawableInterface;
use Intervention\Image\Interfaces\PointInterface;

class Ellipse implements DrawableInterface
{
    use HasBorder;
    use HasBackgroundColor;

    /**
     * Create new Ellipse
	 * 创建新的椭圆
     *
     * @return void
     */
    public function __construct(
        protected int $width,
        protected int $height,
        protected PointInterface $pivot = new Point()
    ) {
        //
    }

    /**
     * {@inheritdoc}
     *
     * @see DrawableInterface::position()
     */
    public function position(): PointInterface
    {
        return $this->pivot;
    }

    /**
     * {@inheritdoc}
     *
     * @see DrawableInterface::setPosition()
     */
    public function setPosition(PointInterface $position): self
    {
        $this->pivot = $position;

        return $this;
    }

    /**
     * Return pivot point of Ellipse
	 * 椭圆的返回支点
     */
    public function pivot(): PointInterface
    {
        return $this->pivot;
    }

    /**
     * Set size of Ellipse
	 * 椭圆的大小
     */
    public function setSize(int $width, int $height): self
    {
        return $this->setWidth($width)->setHeight($height);
    }

    /**
     * Set width of Ellipse
	 * 椭圆的设置宽度
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Set height of Ellipse
	 * 设置椭圆的高度
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get width of Ellipse
	 * 得到椭圆的宽度
     */
    public function width(): int
    {
        return $this->width;
    }

    /**
     * Get height of Ellipse
	 * 得到椭圆的高度
     */
    public function height(): int
    {
        return $this->height;
    }
}
