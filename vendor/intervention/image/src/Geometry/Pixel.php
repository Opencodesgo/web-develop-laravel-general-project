<?php
/**
 * Intervention，图片，Geometry，Pixel
 */

declare(strict_types=1);

namespace Intervention\Image\Geometry;

use Intervention\Image\Interfaces\ColorInterface;

class Pixel extends Point
{
    /**
     * Create new pixel instance
	 * 创建新的像素实例
     *
     * @return void
     */
    public function __construct(
        protected ColorInterface $background,
        protected int $x,
        protected int $y
    ) {
        //
    }

    /**
     * {@inheritdoc}
     *
     * @see DrawableInterface::setBackgroundColor()
     */
    public function setBackgroundColor(ColorInterface $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @see DrawableInterface::backgroundColor()
     */
    public function backgroundColor(): ColorInterface
    {
        return $this->background;
    }
}
