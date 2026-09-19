<?php
/**
 * Intervention，图片，编辑器，BlendTransparencyModifier
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Colors\Rgb\Channels\Blue;
use Intervention\Image\Colors\Rgb\Channels\Green;
use Intervention\Image\Colors\Rgb\Channels\Red;
use Intervention\Image\Colors\Rgb\Color;
use Intervention\Image\Drivers\SpecializableModifier;
use Intervention\Image\Exceptions\ColorException;
use Intervention\Image\Exceptions\RuntimeException;
use Intervention\Image\Interfaces\ColorInterface;
use Intervention\Image\Interfaces\DriverInterface;

class BlendTransparencyModifier extends SpecializableModifier
{
    /**
     * Create new modifier object
	 * 创建新的修改器对象
     *
     * @return void
     */
    public function __construct(public mixed $color = null)
    {
        //
    }

    /**
     * Decode blending color of current modifier with given driver. Possible
     * (semi-)transparent alpha channel values are made opaque.
	 * 用给定的驱动程序解码当前修改器的混合颜色。可能(半)透明的alpha通道值是不透明的。
     *
     * @throws RuntimeException
     * @throws ColorException
     */
    protected function blendingColor(DriverInterface $driver): ColorInterface
    {
        // decode blending color
        $color = $driver->handleInput(
            $this->color ?: $driver->config()->blendingColor
        );

        // replace alpha channel value with opaque value
        if ($color->isTransparent()) {
            return new Color(
                $color->channel(Red::class)->value(),
                $color->channel(Green::class)->value(),
                $color->channel(Blue::class)->value(),
            );
        }

        return $color;
    }
}
