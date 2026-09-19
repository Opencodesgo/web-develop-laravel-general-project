<?php
/**
 * Intervention，图片，接口，字体接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\FontException;

interface FontInterface
{
    /**
     * Set color of font
	 * 设置字体颜色
     */
    public function setColor(mixed $color): self;

    /**
     * Get color of font
	 * 获得字体颜色
     */
    public function color(): mixed;

    /**
     * Set stroke color of font
	 * 设置字体颜色
     */
    public function setStrokeColor(mixed $color): self;

    /**
     * Get stroke color of font
	 * 获得字体颜色
     */
    public function strokeColor(): mixed;

    /**
    * Set stroke width of font
	* 设置字体宽度
    *
    * @throws FontException
    */
    public function setStrokeWidth(int $width): self;

    /**
     * Get stroke width of font
	 * 获得字体的行程宽度
     */
    public function strokeWidth(): int;

    /**
     * Determine if the font is drawn with outline stroke effect
	 * 确定字体是否被描出行程效果
     */
    public function hasStrokeEffect(): bool;

    /**
     * Set font size
	 * 设置字体大小
     */
    public function setSize(float $size): self;

    /**
     * Get font size
	 * 得到字体大小
     */
    public function size(): float;

    /**
     * Set rotation angle of font
	 * 设置字体的旋转角度
     */
    public function setAngle(float $angle): self;

    /**
     * Get rotation angle of font
	 * 得到字体的旋转角度
     */
    public function angle(): float;

    /**
     * Set font filename
	 * 设置字体文件名
     */
    public function setFilename(string $filename): self;

    /**
     * Get font filename
	 * 获取字体文件名
     */
    public function filename(): ?string;

    /**
     * Determine if font has a corresponding filename
	 * 确定字体是否有相应的文件名
     */
    public function hasFilename(): bool;

    /**
     * Set horizontal alignment of font
     */
    public function setAlignment(string $align): self;

    /**
     * Get horizontal alignment of font
     */
    public function alignment(): string;

    /**
     * Set vertical alignment of font
     */
    public function setValignment(string $align): self;

    /**
     * Get vertical alignment of font
     */
    public function valignment(): string;

    /**
     * Set typographical line height
     */
    public function setLineHeight(float $value): self;

    /**
     * Get line height of font
     */
    public function lineHeight(): float;

    /**
     *  Set the wrap width with which the text is rendered
     */
    public function setWrapWidth(?int $width): self;

    /**
     * Get wrap width with which the text is rendered
     */
    public function wrapWidth(): ?int;
}
