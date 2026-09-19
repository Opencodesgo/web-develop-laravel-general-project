<?php
/**
 * Intervention，图片，驱动程序，SpecializableModifier
 */

declare(strict_types=1);

namespace Intervention\Image\Drivers;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

abstract class SpecializableModifier extends Specializable implements ModifierInterface
{
    /**
     * {@inheritdoc}
     *
     * @see ModifierInterface::apply()
     */
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->modify($this);
    }
}
