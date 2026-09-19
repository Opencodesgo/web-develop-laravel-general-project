<?php
/**
 * Intervention，图片，驱动程序，Gd，分析器，Colorspace 分析器
 */

declare(strict_types=1);

namespace Intervention\Image\Drivers\Gd\Analyzers;

use Intervention\Image\Analyzers\ColorspaceAnalyzer as GenericColorspaceAnalyzer;
use Intervention\Image\Colors\Rgb\Colorspace;
use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\SpecializedInterface;

class ColorspaceAnalyzer extends GenericColorspaceAnalyzer implements SpecializedInterface
{
    /**
     * {@inheritdoc}
     *
     * @see AnalyzerInterface::analyze()
     */
    public function analyze(ImageInterface $image): mixed
    {
        return new Colorspace();
    }
}
