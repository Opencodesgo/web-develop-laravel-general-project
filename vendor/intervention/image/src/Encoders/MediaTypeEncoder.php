<?php
/**
 * Intervention，图片，编码器，媒体类型编码器
 */

declare(strict_types=1);

namespace Intervention\Image\Encoders;

use Error;
use Intervention\Image\Drivers\AbstractEncoder;
use Intervention\Image\Exceptions\EncoderException;
use Intervention\Image\Interfaces\EncodedImageInterface;
use Intervention\Image\Interfaces\EncoderInterface;
use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\MediaType;

class MediaTypeEncoder extends AbstractEncoder
{
    /**
     * Encoder options
	 * 编码器选项
     *
     * @var array<string, mixed>
     */
    protected array $options = [];

    /**
     * Create new encoder instance
	 * 创建新的编码器实例
     *
     * @param null|string|MediaType $mediaType Target media type for example "image/jpeg"
     * @return void
     */
    public function __construct(public null|string|MediaType $mediaType = null, mixed ...$options)
    {
        $this->options = $options;
    }

    /**
     * {@inheritdoc}
     *
     * @see EncoderInterface::encode()
     */
    public function encode(ImageInterface $image): EncodedImageInterface
    {
        $mediaType = is_null($this->mediaType) ? $image->origin()->mediaType() : $this->mediaType;

        return $image->encode(
            $this->encoderByMediaType($mediaType)
        );
    }

    /**
     * Return new encoder by given media (MIME) type
	 * 通过给定的媒体(MIME)类型返回新的编码器
     *
     * @throws EncoderException
     */
    protected function encoderByMediaType(string|MediaType $mediaType): EncoderInterface
    {
        try {
            $mediaType = is_string($mediaType) ? MediaType::from($mediaType) : $mediaType;
        } catch (Error) {
            throw new EncoderException('No encoder found for media type (' . $mediaType . ').');
        }

        return $mediaType->format()->encoder(...$this->options);
    }
}
