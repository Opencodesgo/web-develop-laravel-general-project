<?php
/**
 * Intervention，图片，驱动程序，SpecializableAnalyzer
 */

declare(strict_types=1);

namespace Intervention\Image\Drivers;

use Intervention\Image\Interfaces\AnalyzerInterface;
use Intervention\Image\Interfaces\ImageInterface;

abstract class SpecializableAnalyzer extends Specializable implements AnalyzerInterface
{
    /**
     * {@inheritdoc}
     *
     * @see AnalyzerInterface::analyze()
     */
    public function analyze(ImageInterface $image): mixed
    {
        return $image->analyze($this);
    }
}
