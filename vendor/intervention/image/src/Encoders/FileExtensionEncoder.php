<?php
/**
 * Intervention，图片，编码器，文件扩展编码器
 */

declare(strict_types=1);

namespace Intervention\Image\Encoders;

use Error;
use Intervention\Image\Exceptions\EncoderException;
use Intervention\Image\FileExtension;
use Intervention\Image\Interfaces\EncodedImageInterface;
use Intervention\Image\Interfaces\EncoderInterface;
use Intervention\Image\Interfaces\ImageInterface;

class FileExtensionEncoder extends AutoEncoder
{
    /**
     * Encoder options
	 * 编码器选项
     *
     * @var array<string, mixed>
     */
    protected array $options = [];

    /**
     * Create new encoder instance to encode to format of given file extension
	 * 创建新的编码器实例来编码给定文件扩展的格式
     *
     * @param null|string|FileExtension $extension Target file extension for example "png"
     * @return void
     */
    public function __construct(public null|string|FileExtension $extension = null, mixed ...$options)
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
        $extension = is_null($this->extension) ? $image->origin()->fileExtension() : $this->extension;

        return $image->encode(
            $this->encoderByFileExtension(
                $extension
            )
        );
    }

    /**
     * Create matching encoder for given file extension
	 * 为给定的文件扩展名创建匹配的编码器
     *
     * @throws EncoderException
     */
    protected function encoderByFileExtension(null|string|FileExtension $extension): EncoderInterface
    {
        if (empty($extension)) {
            throw new EncoderException('No encoder found for empty file extension.');
        }

        try {
            $extension = is_string($extension) ? FileExtension::from(strtolower($extension)) : $extension;
        } catch (Error) {
            throw new EncoderException('No encoder found for file extension (' . $extension . ').');
        }

        return $extension->format()->encoder(...$this->options);
    }
}
