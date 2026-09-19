<?php
/**
 * Intervention，图片，驱动程序，Gd，编码器，Avif 编码器
 */

declare(strict_types=1);

namespace Intervention\Image\Drivers\Gd\Encoders;

use Intervention\Image\EncodedImage;
use Intervention\Image\Encoders\AvifEncoder as GenericAvifEncoder;
use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\SpecializedInterface;

class AvifEncoder extends GenericAvifEncoder implements SpecializedInterface
{
    /**
     * {@inheritdoc}
     *
     * @see EncoderInterface::encode()
     */
    public function encode(ImageInterface $image): EncodedImage
    {
        return $this->createEncodedImage(function ($pointer) use ($image): void {
            imageavif($image->core()->native(), $pointer, $this->quality);
        }, 'image/avif');
    }
}
