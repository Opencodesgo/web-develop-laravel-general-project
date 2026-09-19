<?php
/**
 * Intervention，图片，编辑器，Draw Bezier 编辑器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Geometry\Bezier;
use Intervention\Image\Interfaces\DrawableInterface;

class DrawBezierModifier extends AbstractDrawModifier
{
    /**
     * Create new modifier object
	 * 创建新的修改器对象
     *
     * @return void
     */
    public function __construct(public Bezier $drawable)
    {
        //
    }

    /**
     * Return object to be drawn
	 * 返回对象被绘制
     */
    public function drawable(): DrawableInterface
    {
        return $this->drawable;
    }
}
